<?php

namespace Database\Factories;

use App\Models\Cooperative;
use App\Models\FinanceCategory;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1000, 9999),
            'finance_category_id' => function () {
                return FinanceCategory::factory()->create()->id;
            },
            'cooperative_id' => function () {
                return Cooperative::factory()->create()->id;
            },
            'year' => $this->faker->year,
            'month' => $this->faker->monthName,
            'date' => $this->faker->date,
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'status' => 'pending',
            'description' => $this->faker->paragraph,
            'flag' => $this->faker->boolean,
        ];
    }
}
