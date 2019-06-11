<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name,
        'price'=>$faker->randomFloat(2,1,99),
        'description'=>$faker->paragraph(25),
        'created_at'=>$faker->dateTimeThisDecade  ('now', null),
        'updated_at'=>$faker->dateTimeThisDecade  ('now', null),
    ];
});
