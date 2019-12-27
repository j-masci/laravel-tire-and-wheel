<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rim;
use Faker\Generator as Faker;

$factory->define(Rim::class, function (Faker $faker) {

    $ret = [];

    foreach ( [
                  'part_number',
                  'finish_id',
                  'width',
                  'diameter',
                  'bolt_pattern_1',
                  'bolt_pattern_2',
                  'offset',
                  'center_bore'
              ] as $col ) {
        $ret[$col] = Rim::generateRandomValue( $col );
    }

    return $ret;
});
