<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\StoreRule;
use Faker\Generator as Faker;

$factory->define(StoreRule::class, function (Faker $faker) {
    return [
        //
        'store_id'=> \App\Store::all()->random()->id,
        'product_id'=> \App\Product::all()->random()->id,
        'created_at'=>$faker->dateTimeThisDecade('now', null),
        'updated_at'=>$faker->dateTimeThisDecade('now', null)
    ];
});
