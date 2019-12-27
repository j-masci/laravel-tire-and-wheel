<?php

use Illuminate\Database\Seeder;

class RimBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\RimBrand::class, 25)->create();
    }
}
