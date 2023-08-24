<?php

    namespace App\Http\SystemAnalytic\Handlers;

    use App\Models\FinanceCategory;
    use App\Models\Transaction;
    use Illuminate\Support\Facades\DB;
    use Kakaprodo\SystemAnalytic\Lib\AnalyticResponse;
    use Kakaprodo\SystemAnalytic\Lib\ChartBase\Computed;

    class CategoriesAnalytic extends Computed {
        /**
         * Implement the logic of handler
         */
        protected function result(): AnalyticResponse {
            $transaction = Transaction::groupBy('finance_category_id')
                                ->select('finance_category_id', DB::raw('SUM(amount) as total_amount'))
                                ->get();

            $statisticsMapped = array_map(function ($statistic) {
                $financeCategory = FinanceCategory::find($statistic['finance_category_id']);
                $categoryName = $financeCategory ? $financeCategory->name : 'Unknown Category';
                return [
                    'name' => $categoryName,
                    'y' => $statistic['total_amount']
                ];
            }, $transaction->all());

            return $this->response($statisticsMapped);
        }
    }
