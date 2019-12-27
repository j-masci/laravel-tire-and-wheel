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
        DB::table( 'tire_brands' )->insert( [
            'tire_brand_slug' => 'tire-brand-1',
            'tire_brand_name' => 'Tire Brand 1',
        ]);
    }
}
