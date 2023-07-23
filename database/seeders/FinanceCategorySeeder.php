<?php

namespace Database\Seeders;

use App\Models\FinanceCategory;
use Illuminate\Database\Seeder;

class FinanceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FinanceCategory::factory()->count(5)->create();
    }
}
