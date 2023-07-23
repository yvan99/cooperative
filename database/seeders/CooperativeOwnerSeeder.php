<?php

namespace Database\Seeders;

use App\Models\CooperativeOwner;
use Illuminate\Database\Seeder;

class CooperativeOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CooperativeOwner::factory()->count(20)->create();
    }
}
