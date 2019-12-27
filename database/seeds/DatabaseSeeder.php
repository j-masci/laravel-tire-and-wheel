<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

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
            TireBrandSeeder::class,
            TireModelSeeder::class,
            TireSeeder::class,
            RimBrandSeeder::class,
            RimModelSeeder::class,
            RimFinishSeeder::class,
            RimSeeder::class,
        ]);
    }
}
