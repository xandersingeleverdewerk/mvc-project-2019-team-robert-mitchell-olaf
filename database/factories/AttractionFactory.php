<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Attraction;
use Faker\Generator as Faker;

$factory->define(App\Attraction::class, function (Faker $faker) {
    return [
        //
        'waitTime' => $faker->time('I:s'),
        'minAge' => $faker->randomFloat(0, 0, 18),
        'minLength' => $faker->randomfloat(2, 0, 1.50),
        'created_at' => $faker->dateTimeThisDecade ('now', null),
        'updated_at' => $faker->dateTimeThisDecade ('now', null)
    ];
});
