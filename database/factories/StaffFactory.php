<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    protected $model = Staff::class;

    public function definition()
    {
        return [
            'names' => $this->faker->name,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ];
    }
}
