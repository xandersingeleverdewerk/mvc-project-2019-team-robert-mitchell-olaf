<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'created_at' => $faker->dateTimeThisDecade  ('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
