<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RimModel;
use Faker\Generator as Faker;
use \Illuminate\Support\Str;

$factory->define(RimModel::class, function (Faker $faker) {

    $name = $faker->words( 3, true );

    return [
        'brand_id' => \App\RimBrand::query()->limit(1)->inRandomOrder()->get()->first()->id,
        'name' => $name,
        'slug' => Str::slug( $name )
    ];
});
