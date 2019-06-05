<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RestaurantRule;
use Faker\Generator as Faker;

$factory->define(RestaurantRule::class, function (Faker $faker) {
    return [
        'restaurant_id'=> \App\Restaurant::all()->random()->id,
        'dish_id' => \App\Dish::all()->random()->id,
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
