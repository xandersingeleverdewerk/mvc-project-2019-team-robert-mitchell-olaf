<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'created_at' => $faker->dateTimeThisDecade  ('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
