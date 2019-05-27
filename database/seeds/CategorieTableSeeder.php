<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Categorie::class, 10)->create()
           ->each(function($categorie) {
               $categorie->attraction()->saveMany(factory(\App\Attraction::class, rand(0,5))
                   ->create(['categorie_id' => $categorie->id]));
           });
    }
}
