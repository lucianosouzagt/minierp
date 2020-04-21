<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'group_id'=> $faker->randomDigitNot(0),
        'title'=> $faker->name,
        'desc'=> $faker->text,
        'quantity'=> $faker->numberBetween($min = 1, $max = 50),
        'price'=> $faker->randomFloat(2, 0, 6),
        'image'=> $faker->imageUrl($width = 200, $height = 200),
        'created'=> $faker->date($format = 'Y-m-d H:i:s', $max = 'now')
    ];
});
