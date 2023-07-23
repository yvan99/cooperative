<?php

namespace Database\Seeders;

use App\Models\Auditor;
use Illuminate\Database\Seeder;

class AuditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auditor::factory()->count(5)->create();
    }
}
