<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Dish;
use Faker\Generator as Faker;

$factory->define(Dish::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2,0.01,9),
        'description' => $faker->paragraph(25),
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
