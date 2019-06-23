<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Categorie;
use Faker\Generator as Faker;

$factory->define(App\Categorie::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null)
    ];
});
