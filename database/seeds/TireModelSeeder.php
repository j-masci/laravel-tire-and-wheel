<?php

use Illuminate\Database\Seeder;

class TireModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\TireModel::class, 300)->create();
    }
}
