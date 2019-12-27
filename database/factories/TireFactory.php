<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tire;
use Faker\Generator as Faker;

$factory->define(Tire::class, function (Faker $faker) {

    $ret = [];

    foreach ([
                 'part_number',
                 'model_id',
                 'width',
                 'profile',
                 'diameter',
                 'type',
                 'load_index_1',
                 'speed_rating',
             ] as $col) {
        $ret[$col] = Tire::getRandomValue($col);
    }

    return $ret;
});
