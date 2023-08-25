<?php

    namespace App\Http\Controllers;

    use App\Models\Cooperative;
    use App\Models\Transaction;
    use Illuminate\Support\Facades\Auth;
    use Kakaprodo\SystemAnalytic\AnalyticGate;

    class DashboardController extends Controller {
        public function index() {
            $incomeVsExpence = AnalyticGate::process([ 'analytic_type' => 'income_vs_expence' ])['result'];

            // Charts analytics
            $analytics = collect([
                'categories' => json_encode(AnalyticGate::process([ 'analytic_type' => 'categories' ])['result']),

                'transactions' => json_encode([
                    ['name' => 'Expences Avarage', 'data' => AnalyticGate::process([ 'analytic_type' => 'expences-analytics' ])['result']],
                    ['name' => 'Incomes Average', 'data' => AnalyticGate::process([ 'analytic_type' => 'incomes-analytics' ])['result']],
                ]),

                'incone_vs_expences' => json_encode([
                    [ 'name' => 'Income', 'y' => $incomeVsExpence['incomes'] ],
                    [ 'name' => 'Expences', 'y' => $incomeVsExpence['expences'] ],
                ]),
            ]);

            // Computed anaytics
            $coops = Cooperative::whereHas('owners', fn($query) => $query->where('owner_id', Auth::user()->id))->count();
            $trans = Transaction::whereHas('cooperative', fn($query) => $query->where('id', Auth::user()->id))->count();
            $expences = Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'expense'))->avg('amount');
            $incomes = Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'income'))->avg('amount');

            $computedAnalytics = [
                'coops' => $coops,
                'incomes' => $incomes,
                'expences' => $expences,
                'transactions' => $trans,
            ];

            return view('owner.dashboard', compact('analytics', 'computedAnalytics'));

        }
    }
