<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        factory(App\User::class, 1)->create(['name' => 'admin',
            'email' => 'admin@mail.nl',
            'password' => bcrypt( 'admin123')])
            ->each(function (User $user){
                $user->assignRole('admin');
            });

        factory(App\User::class, 1)->create(['name' => 'customer',
            'email' => 'customer@mail.nl',
            'password' => bcrypt( 'customer123')])
            ->each(function (User $user){
                $user->assignRole('customer');
            });

        factory(App\User::class, 1)->create(['name' => 'John Brink',
            'email' => 'john@mail.nl',
            'date_of_birth' =>'2000-06-19',
            'adress' =>'wegisweg 12',
            'house_number' =>'19',
            'postal_code' =>'1234',
            'phone_number' =>'0101234567',
            'password' => bcrypt( 'john123')])
            ->each(function (User $user){
                $user->assignRole('customer');
            });
    }
}
