<?php

use Illuminate\Database\Seeder;

class TireBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\TireBrand::class, 20)->create();
    }
}
