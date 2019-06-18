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
        factory(App\Facilitie::class, 20)->create()
            ->each(function($facilitie) {
                $facilitie->attraction()->saveMany(factory(\App\Attraction::class, 1)
                    ->create(['facilitie_id' => $facilitie->id]));
            });

        factory(App\Facilitie::class, 20)->create()
            ->each(function($facilitie) {
                $facilitie->restaurant()->saveMany(factory(\App\Restaurant::class, 1)
               ->create(['facilitie_id' => $facilitie->id]));
            });

        factory(App\Facilitie::class, 20)->create()
            ->each(function($facilitie) {
                $facilitie->store()->saveMany(factory(\App\Store::class, 1)
                    ->create(['facilitie_id' => $facilitie->id]));
            });
    }
}
