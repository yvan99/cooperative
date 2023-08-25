<?php

    namespace App\Http\SystemAnalytic\Handlers;

    use App\Models\Transaction;
    use Kakaprodo\SystemAnalytic\Lib\AnalyticResponse;
    use Kakaprodo\SystemAnalytic\Lib\ChartBase\Computed;

    class IncomeVsExpenceAnalytic extends Computed {
        /**
         * Implement the logic of handler
         */
        protected function result(): AnalyticResponse {
            $result = [
                'expences' => Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'expense'))->avg('amount'),
                'incomes' => Transaction::whereHas('financeCategory', fn($query) => $query->where('type', 'income'))->avg('amount'),
            ];

            return $this->response($result);
        }
    }
