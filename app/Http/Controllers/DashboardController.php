<?php

    namespace App\Http\Controllers;

    use Kakaprodo\SystemAnalytic\AnalyticGate;

    class DashboardController extends Controller {
        public function index() {
            $analytics = collect([
                'transactions' => json_encode([
                    ['name' => 'Expences Avarage', 'data' => AnalyticGate::process([ 'analytic_type' => 'expences-analytics' ])['result']],
                    ['name' => 'Incomes Average', 'data' => AnalyticGate::process([ 'analytic_type' => 'incomes-analytics' ])['result']],
                ]),

                'categories' => json_encode(AnalyticGate::process([ 'analytic_type' => 'categories' ])['result']),

                'incone_vs_expences' => json_encode([
                    [ 'name' => 'Income', 'y' => 5620 ],
                    [ 'name' => 'Expences', 'y' => 4955 ],
                ]),
            ]);

            return view('owner.dashboard', compact('analytics'));
        }
    }
