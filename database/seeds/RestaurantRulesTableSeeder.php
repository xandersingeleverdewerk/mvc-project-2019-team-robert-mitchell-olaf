<?php

use Illuminate\Database\Seeder;

class RestaurantRulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RestaurantRule::class, 60)->create();
    }
}
