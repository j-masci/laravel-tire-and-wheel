<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RimFinish;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(RimFinish::class, function (Faker $faker) {

    $name = RimFinish::generateRandomValue( 'name' );

    return [
        'name' => $name,
        'slug' => Str::slug( $name ),
        'model_id' => \Core\Helpers\getRandomRecordColumn( \App\RimModel::class, 'id', null ),
    ];
});
