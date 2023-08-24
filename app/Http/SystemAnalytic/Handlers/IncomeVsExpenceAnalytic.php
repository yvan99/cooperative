<?php

    namespace App\Http\SystemAnalytic\Handlers;

    use Kakaprodo\SystemAnalytic\Lib\AnalyticResponse;
    use Kakaprodo\SystemAnalytic\Lib\ChartBase\Computed;

    class IncomeVsExpenceAnalytic extends Computed {
        /**
         * Implement the logic of handler
         */
        protected function result(): AnalyticResponse {
            $result = $makeYourOwnLogicHere = [];
            return $this->response($result);
        }
    }
