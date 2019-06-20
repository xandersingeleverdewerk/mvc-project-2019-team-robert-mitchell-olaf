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
        Permission::create(['name' => 'create attractions']);
        Permission::create(['name' => 'edit attractions']);
        Permission::create(['name' => 'delete attractions']);
        Permission::create(['name' => 'show attractions']);

        Permission::create(['name' => 'create dishes']);
        Permission::create(['name' => 'edit dishes']);
        Permission::create(['name' => 'delete dishes']);
        Permission::create(['name' => 'show dishes']);

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

        //rollen maken en toewijzen
       /* $role = Role::create(['name' => 'visitor']);
        $role->givePermissionTo('');

       */
        $role = Role::create(['name' => 'customer']);
        $role->givePermissionTo('show dishes', 'show products', 'home customer', 'show storeRules', 'show attractions');


        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
        $role->revokePermissionTo('home customer');
    }
}
