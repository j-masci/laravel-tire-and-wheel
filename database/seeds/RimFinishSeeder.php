<?php

use Illuminate\Database\Seeder;

class RimFinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\RimFinish::class, 400)->create();
    }
}
