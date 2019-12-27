<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TireBrand;
use Faker\Generator as Faker;

$factory->define(TireBrand::class, function (Faker $faker) {
    $name = $faker->words( 2, true);
    return [
        'name' => $name,
        'slug' => Str::slug( $name ),
    ];
});
