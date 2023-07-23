<?php

namespace Database\Factories;

use App\Models\Cooperative;
use App\Models\CooperativeOwner;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class CooperativeOwnerFactory extends Factory
{
    protected $model = CooperativeOwner::class;

    public function definition()
    {
        return [
            'cooperative_id' => function () {
                return Cooperative::factory()->create()->id;
            },
            'owner_id' => function () {
                return Owner::factory()->create()->id;
            },
        ];
    }
}
