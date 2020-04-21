<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Group::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'desc'=> $faker->text,
        'created'=> $faker->date($format = 'Y-m-d H:i:s', $max = 'now')
    ];
});
