<?php

    namespace App\Http\SystemAnalytic\Handlers;

    use App\Models\Transaction;
    use Illuminate\Support\Facades\Session;
    use Kakaprodo\SystemAnalytic\Lib\AnalyticResponse;
    use Kakaprodo\SystemAnalytic\Lib\ChartBase\Computed;

    class IncomeVsExpenceAnalytic extends Computed {
        /**
         * Implement the logic of handler
         */
        protected function result(): AnalyticResponse {
            $defaultCooperativeId = Session::get('defaultCooperativeId');

            $result = [
                'expences' => Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('financeCategory', fn($query) => $query->where('type', 'expense'))->avg('amount'),
                'incomes' => Transaction::where('cooperative_id', $defaultCooperativeId)->whereHas('financeCategory', fn($query) => $query->where('type', 'income'))->avg('amount'),
            ];

            return $this->response($result);
        }
    }
