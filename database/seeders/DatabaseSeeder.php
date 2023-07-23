<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            CooperativeSeeder::class,
            StaffSeeder::class,
            AuditorSeeder::class,
            OwnerSeeder::class,
            CooperativeOwnerSeeder::class,
            AccountSeeder::class,
            FinanceCategorySeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
