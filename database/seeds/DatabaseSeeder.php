<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call( CategoriesTableSeeder::class);
        $this->call( FacilitiesTableSeeder::class);
        $this->call( DishesTableSeeder::class);
        $this->call( RestaurantRulesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StoreRulesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);

    }
}
