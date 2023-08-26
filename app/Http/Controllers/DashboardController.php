<?php

    namespace App\Http\Controllers;

    use App\Models\Account;
    use App\Models\Cooperative;
    use App\Models\FinanceCategory;
    use App\Models\Transaction;
    use Illuminate\Support\Facades\Auth;
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
            $trans = Transaction::whereHas('cooperative', fn ($query) => $query->where('id', $defaultCooperativeId))->count();
            $expences = Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('financeCategory', fn ($query) => $query->where('type', 'expense'))->avg('amount');
            $incomes = Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('financeCategory', fn ($query) => $query->where('type', 'income'))->avg('amount');

            $computedAnalytics = [
                'coops' => $coops,
                'incomes' => $incomes,
                'expences' => $expences,
                'transactions' => $trans,
            ];

            $financeCategories = FinanceCategory::where('cooperative_id', $defaultCooperativeId)->get();
            $accounts = Account::where('cooperative_id', $defaultCooperativeId)->get();

            return view('auditor.dashboard', compact('analytics', 'computedAnalytics', 'financeCategories', 'accounts'));
        }

        public function auditorReviews() {
            $defaultCooperativeId = Session::get('defaultCooperativeId');

            if (!$defaultCooperativeId) {
                return redirect()->route('cooperatives.index')->with('no-cooperative', 'Please set a default cooperative first.');
            }

            $cooperatives = Cooperative::with('transactions')->get();
            $financeCategories = FinanceCategory::where('cooperative_id', $defaultCooperativeId)->get();
            $accounts = Account::where('cooperative_id', $defaultCooperativeId)->get();

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

    }
