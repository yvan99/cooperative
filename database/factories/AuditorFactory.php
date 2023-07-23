<?php

namespace Database\Factories;

use App\Models\Auditor;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditorFactory extends Factory
{
    protected $model = Auditor::class;

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
