<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RimBrand;
use Faker\Generator as Faker;
use \Illuminate\Support\Str;

$factory->define(RimBrand::class, function (Faker $faker) {

    $name = $faker->words( 3, true );
    return [
        'name' => $name,
        'slug' => Str::slug( $name )
    ];
});
