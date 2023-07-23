<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CooperativeFactory extends Factory
{
    protected $model = Cooperative::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'certificate' => $this->faker->word . '.pdf',
            'category_id' => function () {
                return Category::factory()->create()->id;
            },
            'members' => $this->faker->randomNumber(),
            'status' => 'pending',
        ];
    }
}
