<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TireModel;
use Faker\Generator as Faker;

$factory->define(TireModel::class, function (Faker $faker) {

    $name = $faker->words( 3, true );

    return [
        'name' => $name,
        'slug' => Str::slug( $name ),
        'brand_id' => \Core\Helpers\getRandomRecordColumn( \App\tireBrand::class, 'id', null )
    ];
});
