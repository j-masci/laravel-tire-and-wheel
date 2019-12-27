<?php

use Illuminate\Database\Seeder;

class RimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Rim::class, 8000)->create();
    }
}
