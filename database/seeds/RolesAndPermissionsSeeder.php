<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()['cache']->forget('spatie.permission.cache');

        //create permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'show users']);

        Permission::create(['name' => 'create attractions']);
        Permission::create(['name' => 'edit attractions']);
        Permission::create(['name' => 'delete attractions']);
        Permission::create(['name' => 'show attractionsWaitTime']);
        Permission::create(['name' => 'show attractionsId']);

        Permission::create(['name' => 'create restaurants']);
        Permission::create(['name' => 'edit restaurants']);
        Permission::create(['name' => 'delete restaurants']);
        Permission::create(['name' => 'show restaurants']);
        Permission::create(['name' => 'show restaurantsId']);

        Permission::create(['name' => 'create restaurantRules']);
        Permission::create(['name' => 'edit restaurantRules']);
        Permission::create(['name' => 'delete restaurantRules']);
        Permission::create(['name' => 'show restaurantRules']);

        Permission::create(['name' => 'create dishes']);
        Permission::create(['name' => 'edit dishes']);
        Permission::create(['name' => 'delete dishes']);
        Permission::create(['name' => 'show dishes']);
        Permission::create(['name' => 'show dishesId']);

        Permission::create(['name' => 'create stores']);
        Permission::create(['name' => 'edit stores']);
        Permission::create(['name' => 'delete stores']);
        Permission::create(['name' => 'show stores']);
        Permission::create(['name' => 'show storeId']);

        Permission::create(['name' => 'create storeRules']);
        Permission::create(['name' => 'edit storeRules']);
        Permission::create(['name' => 'delete storeRules']);
        Permission::create(['name' => 'show storeRules']);

        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'edit products']);
        Permission::create(['name' => 'delete products']);
        Permission::create(['name' => 'show products']);
        Permission::create(['name' => 'show productId']);

        Permission::create(['name' => 'home admin']);
        Permission::create(['name' => 'home customer']);

        Permission::create(['name' => 'edit customer']);

        //rollen maken en toewijzen
       /* $role = Role::create(['name' => 'visitor']);
        $role->givePermissionTo('');

       */
        $role = Role::create(['name' => 'customer']);
        $role->givePermissionTo('show dishes', 'show attractionsWaitTime', 'show products', 'show storeRules',
            'show restaurantRules','home customer');


        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
        $role->revokePermissionTo('home customer');
    }
}
