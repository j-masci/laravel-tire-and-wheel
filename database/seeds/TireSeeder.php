<?php

use Illuminate\Database\Seeder;

class TireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Tire::class, 6000)->create();
    }
}

