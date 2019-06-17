<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'review' => $faker->paragraph(25),
        'user_id'=> \App\User::all()->random()->id,
        'facilitie_id' => \App\Facilitie::all()->random()->id,
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
