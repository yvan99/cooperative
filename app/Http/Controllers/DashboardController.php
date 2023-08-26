<?php

    namespace App\Http\Controllers;

    use App\Models\Account;
    use App\Models\Cooperative;
    use App\Models\FinanceCategory;
    use App\Models\Transaction;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use Kakaprodo\SystemAnalytic\AnalyticGate;

    class DashboardController extends Controller {

        public function owner() {
            $incomeVsExpence = AnalyticGate::process(['analytic_type' => 'income_vs_expence'])['result'];

            $defaultCooperativeId = Session::get('defaultCooperativeId');

            if (!$defaultCooperativeId) {
                return redirect()->route('cooperatives.index')->with('no-cooperative', 'Please set a default cooperative first.');
            }

            // Charts analytics
            $analytics = collect([
                'categories' => json_encode(AnalyticGate::process(['analytic_type' => 'categories'])['result']),

                'transactions' => json_encode([
                    ['name' => 'Expences Avarage', 'data' => AnalyticGate::process(['analytic_type' => 'expences-analytics'])['result']],
                    ['name' => 'Incomes Average', 'data' => AnalyticGate::process(['analytic_type' => 'incomes-analytics'])['result']],
                ]),

                'incone_vs_expences' => json_encode([
                    ['name' => 'Income', 'y' => $incomeVsExpence['incomes']],
                    ['name' => 'Expences', 'y' => $incomeVsExpence['expences']],
                ]),
            ]);

            // Computed anaytics
            $coops = Cooperative::whereHas('owners', fn ($query) => $query->where('owner_id', Auth::user()->id))->count();
            $trans = Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('cooperative', fn ($query) => $query->where('id', $defaultCooperativeId))->count();
            $expences = Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('financeCategory', fn ($query) => $query->where('type', 'expense'))->avg('amount');
            $incomes = Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('financeCategory', fn ($query) => $query->where('type', 'income'))->avg('amount');

            $computedAnalytics = [
                'coops' => $coops,
                'incomes' => $incomes,
                'expences' => $expences,
                'transactions' => $trans,
            ];

            return view('owner.dashboard', compact('analytics', 'computedAnalytics'));
        }

        public function auditor() {
            $incomeVsExpence = AnalyticGate::process(['analytic_type' => 'income_vs_expence'])['result'];

            // Charts analytics
            $analytics = collect([
                'categories' => json_encode($this->categoryAnalytics()),

                'transactions' => json_encode([
                    ['name' => 'Expences Avarage', 'data' => $this->expenceAnalytics()],
                    ['name' => 'Incomes Average', 'data' => $this->incomeAnalytics()],
                ]),

                'incone_vs_expences' => json_encode([
                    ['name' => 'Income', 'y' => Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'expense'))->avg('amount')],
                    ['name' => 'Expences', 'y' => Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'income'))->avg('amount')],
                ]),
            ]);

            // Computed anaytics
            $coops = Cooperative::whereHas('owners', fn ($query) => $query->where('owner_id', Auth::user()->id))->count();
            $trans = Transaction::count();
            $expences = Transaction::whereHas('financeCategory', fn ($query) => $query->where('type', 'expense'))->avg('amount');
            $incomes = Transaction::whereHas('financeCategory', fn ($query) => $query->where('type', 'income'))->avg('amount');

            $computedAnalytics = [
                'coops' => $coops,
                'incomes' => $incomes,
                'expences' => $expences,
                'transactions' => $trans,
            ];

            $financeCategories = FinanceCategory::all();
            $accounts = Account::all();

            return view('auditor.dashboard', compact('analytics', 'computedAnalytics', 'financeCategories', 'accounts'));
        }

        public function expenceAnalytics() {
            $statistics = Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'expense'))
                                ->groupBy(DB::raw('MONTH(date)'))
                                ->select(DB::raw('MONTH(date) as month'), DB::raw('SUM(amount) as total_income'))
                                ->orderBy('month', 'asc')
                                ->get()
                                ->keyBy('month');

            $defaultStatistics = collect(range(1, 11))->mapWithKeys(function ($month) {
                return [$month => (object) ['month' => $month, 'total_income' => 0]];
            });

            $statistics = $defaultStatistics->map(function ($defaultStat) use ($statistics) {
                $month = $defaultStat->month;
                return isset($statistics[$month]) ? $statistics[$month]->total_income : $defaultStat->total_income;
            });

            return array_values($statistics->sortBy('month')->all());
        }

        public function incomeAnalytics() {
            $statistics = Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'income'))
                                ->groupBy(DB::raw('MONTH(date)'))
                                ->select(DB::raw('MONTH(date) as month'), DB::raw('SUM(amount) as total_income'))
                                ->orderBy('month', 'asc')
                                ->get()
                                ->keyBy('month');

            $defaultStatistics = collect(range(1, 11))->mapWithKeys(function ($month) {
                return [$month => (object) ['month' => $month, 'total_income' => 0]];
            });

            $statistics = $defaultStatistics->map(function ($defaultStat) use ($statistics) {
                $month = $defaultStat->month;
                return isset($statistics[$month]) ? $statistics[$month]->total_income : $defaultStat->total_income;
            });

            return array_values($statistics->sortBy('month')->all());
        }

        public function categoryAnalytics() {
            $transaction = Transaction::groupBy('finance_category_id')
                                ->select('finance_category_id', DB::raw('SUM(amount) as total_amount'))
                                ->get();

            return array_map(function ($statistic) {
                $financeCategory = FinanceCategory::find($statistic['finance_category_id']);
                $categoryName = $financeCategory ? $financeCategory->name : 'Unknown Category';
                return [
                    'name' => $categoryName,
                    'y' => $statistic['total_amount']
                ];
            }, $transaction->all());
        }

        public function auditorReviews() {
            $cooperatives = Cooperative::with('transactions')->get();
            $financeCategories = FinanceCategory::all();
            $accounts = Account::all();

            $financialStats = collect();

            foreach ($cooperatives as $cooperative) {
                $totalIncome = 0;
                $totalExpenses = 0;

                foreach ($cooperative->transactions as $transaction) {
                    if ($transaction->financeCategory->type === 'income') {
                        $totalIncome += $transaction->amount;
                    } elseif ($transaction->financeCategory->type === 'expense') {
                        $totalExpenses += $transaction->amount;
                    }
                }

                $netIncome = $totalIncome - $totalExpenses;
                $financialStatus = ($netIncome >= 0) ? 'Profit' : 'Loss';

                $financialStats->push([
                    'cooperative' => $cooperative,
                    'totalIncome' => $totalIncome,
                    'totalExpenses' => $totalExpenses,
                    'netIncome' => $netIncome,
                    'financialStatus' => $financialStatus,
                ]);
            }

            $finStats = $financialStats->all();

            return view('auditor.financial-audit', compact('finStats', 'financeCategories', 'accounts'));
        }

        public function ownerReviews() {
            $cooperatives = Cooperative::with('transactions')->whereHas('owners', fn ($query) => $query->where('owner_id', Auth::user()->id))->get();
            $financeCategories = FinanceCategory::all();
            $accounts = Account::all();

            $financialStats = collect();

            foreach ($cooperatives as $cooperative) {
                $totalIncome = 0;
                $totalExpenses = 0;

                foreach ($cooperative->transactions as $transaction) {
                    if ($transaction->financeCategory->type === 'income') {
                        $totalIncome += $transaction->amount;
                    } elseif ($transaction->financeCategory->type === 'expense') {
                        $totalExpenses += $transaction->amount;
                    }
                }

                $netIncome = $totalIncome - $totalExpenses;
                $financialStatus = ($netIncome >= 0) ? 'Profit' : 'Loss';

                $financialStats->push([
                    'cooperative' => $cooperative,
                    'totalIncome' => $totalIncome,
                    'totalExpenses' => $totalExpenses,
                    'netIncome' => $netIncome,
                    'financialStatus' => $financialStatus,
                ]);
            }

            $finStats = $financialStats->all();

            return view('owner.financial-audit', compact('finStats', 'financeCategories', 'accounts'));
        }

    }
