<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Cooperative;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1000, 9999),
            'name' => $this->faker->word . ' Account',
            'cooperative_id' => function () {
                return Cooperative::factory()->create()->id;
            },
            'description' => $this->faker->paragraph,
            'status' => 'active',
        ];
    }
}
