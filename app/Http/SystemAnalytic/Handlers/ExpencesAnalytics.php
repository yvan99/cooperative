<?php

    namespace App\Http\SystemAnalytic\Handlers;

    use App\Models\Transaction;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use Kakaprodo\SystemAnalytic\Lib\AnalyticResponse;
    use Kakaprodo\SystemAnalytic\Lib\ChartBase\Computed;

    class ExpencesAnalytics extends Computed {
        /**
         * Implement the logic of handler
         */
        protected function result(): AnalyticResponse {
            $defaultCooperativeId = Session::get('defaultCooperativeId');

            if (!$defaultCooperativeId) {
                return redirect()->route('cooperatives.index')->with('no-cooperative', 'Please set a default cooperative first.');
            }

            $statistics = Transaction::where('cooperative_id', $defaultCooperativeId)->whereBetween('date', ['2023-01-01', '2023-11-30'])
                                ->whereHas('financeCategory', fn($query) => $query->where('type', 'expense'))
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

            return $this->response(array_values($statistics->sortBy('month')->all()));
        }
    }
