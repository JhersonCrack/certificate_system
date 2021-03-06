<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Certificate;
use Faker\Generator as Faker;

$factory->define(Certificate::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'date' => $faker->date(),
        'organizedBy' => $faker->sentence(),
    ];
});
