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
        factory(App\Facility::class, 100)->create()
            ->each(function($restaurant) {
                $restaurant->facility()->saveOne(factory(\App\Restaurant::class, intValue())
               ->create(['restaurant_id' => $restaurant->id]));
            });
    }
}
