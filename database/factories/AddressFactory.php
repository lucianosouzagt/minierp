<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Address::class, function (Faker $faker) {
    return [
        'client_id'=> $faker->randomDigitNot(0),
        'title'=> $faker->name,
        'address'=> $faker->streetName,
        'number'=> $faker->numberBetween($min = 10, $max = 999),
        'city'=> $faker->city,
        'district'=> $faker->country,
        'state'=> $faker->stateAbbr
    ];
});
