<?php

    namespace App\Http\SystemAnalytic;

    use App\Http\SystemAnalytic\Handlers\CategoriesAnalytic;
    use App\Http\SystemAnalytic\Handlers\IncomeVsExpenceAnalytic;
    use App\Http\SystemAnalytic\Handlers\ExpencesAnalytics;
    use App\Http\SystemAnalytic\Handlers\IncomeAnalytic;
    use Kakaprodo\CustomData\CustomData;
    use Kakaprodo\SystemAnalytic\Lib\AnalyticHandler;
    use Kakaprodo\SystemAnalytic\Lib\Data\Base\AnalyticHandlerRegisterBase;

    class AnalyticHandlerRegister extends AnalyticHandlerRegisterBase {
        /**
         * register a key value array of your handlers,
         * where the key is the analytic_type and the value
         * is the actual handler
         */
        public static function handlers(): array {
            return [
                'incomes-analytics' => IncomeAnalytic::class,
                'expences-analytics' => ExpencesAnalytics::class,
                'income_vs_expence' => IncomeVsExpenceAnalytic::class,
                'categories' => CategoriesAnalytic::class,
            ];
        }

        /**
         * Register data that you need to use in your
         * analytic handlers
         */
        public function expectedData(CustomData $data): array {
            return [];
        }

        /**
         * Register key that will be ignored when generating
         * the unique key of the nalytic request
         * (for response caching)
         */
        public function ignorePropertyForKeyGenerator(): array {
            return [];
        }

        /**
         * a function that define whether the current authenticated user
         * is an admin user
         */
        public function macroUserIsAdmin(AnalyticHandler $handler) {
            return null;
        }
    }
