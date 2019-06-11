<?php

use Illuminate\Database\Seeder;

class StoreRulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StoreRule::class, 60)->create();
    }
}
