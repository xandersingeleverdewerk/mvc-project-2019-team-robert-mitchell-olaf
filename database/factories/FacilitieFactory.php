<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Facilitie;
use Faker\Generator as Faker;

$factory->define(Facilitie::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->paragraph( 25),
        'opening_time' => $faker->time('h:i','10:00'),
        'closing_time' => $faker->time('h:i', '8:00'),
        'created_at' => $faker->dateTimeThisDecade  ('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
