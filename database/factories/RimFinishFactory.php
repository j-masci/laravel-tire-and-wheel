<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RimFinish;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(RimFinish::class, function (Faker $faker) {

    $name = RimFinish::getRandomValue( 'name' );

    return [
        'name' => $name,
        'slug' => Str::slug( $name ),
        'model_id' => \App\LaravelHelpers::getRandomRecordColumn( \App\RimModel::class, 'id', null ),
    ];
});
