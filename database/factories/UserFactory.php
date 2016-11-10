<?php

use App\Modules\Auth\Entities\User;
use Faker\Generator;

$factory->define(User::class, function (Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "remember_token" => str_random(10),
    ];
});
