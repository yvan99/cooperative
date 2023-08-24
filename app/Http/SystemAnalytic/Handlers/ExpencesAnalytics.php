<?php

    namespace App\Http\SystemAnalytic\Handlers;

    use App\Models\Transaction;
    use Illuminate\Support\Facades\DB;
    use Kakaprodo\SystemAnalytic\Lib\AnalyticResponse;
    use Kakaprodo\SystemAnalytic\Lib\ChartBase\Computed;

    class ExpencesAnalytics extends Computed {
        /**
         * Implement the logic of handler
         */
        protected function result(): AnalyticResponse {
            $statistics = Transaction::whereBetween('date', ['2023-01-01', '2023-11-30'])
                                ->where('type', 'expence')
                                ->groupBy(DB::raw('MONTH(date)'))
                                ->select(DB::raw('MONTH(date) as month'), DB::raw('SUM(amount) as total_income'))
                                ->orderBy('month', 'asc')
                                ->get()
                                ->keyBy('month');

            // Create an array with default values for each month
            $defaultStatistics = collect(range(1, 11))->mapWithKeys(function ($month) {
                return [$month => (object) ['month' => $month, 'total_income' => 0]];
            });

            // Replace the actual statistics with default statistics for missing months
            $statistics = $defaultStatistics->map(function ($defaultStat) use ($statistics) {
                $month = $defaultStat->month;
                return isset($statistics[$month]) ? $statistics[$month]->total_income : $defaultStat->total_income;
            });

            return $this->response(array_values($statistics->sortBy('month')->all()));
        }
    }
