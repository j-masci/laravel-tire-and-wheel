<?php

use Illuminate\Database\Seeder;

class RimModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\RimModel::class, 100)->create();
    }
}
