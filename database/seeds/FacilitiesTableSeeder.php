<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Facilitie::class, 150)->create()
            ->each(function($facilitie) {
                $facilitie->restaurant()->saveMany(factory(\App\Restaurant::class, 1)
               ->create(['facilitie_id' => $facilitie->id]));
                $facilitie->attraction()->saveMany(factory(\App\Attraction::class, 1)
                    ->create(['facilitie_id' => $facilitie->id]));
               });
    }
}
