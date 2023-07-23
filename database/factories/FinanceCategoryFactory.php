<?php

namespace Database\Factories;

use App\Models\Cooperative;
use App\Models\FinanceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;


class FinanceCategoryFactory extends Factory
{
    protected $model = FinanceCategory::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word . ' Category',
            'code' => $this->faker->unique()->numberBetween(1000, 9999),
            'cooperative_id' => function () {
                return Cooperative::factory()->create()->id;
            },
            'type' => $this->faker->randomElement(['income', 'expense']),
            'status' => 'active',
        ];
    }
}
