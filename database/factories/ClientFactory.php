<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Client::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email'=> $faker->freeEmail,
        'cpf'=> $faker->unique()->ipv4,
        'telefone'=> $faker->phoneNumber,
        'created'=> $faker->date($format = 'Y-m-d H:i:s', $max = 'now')
    ];
});
