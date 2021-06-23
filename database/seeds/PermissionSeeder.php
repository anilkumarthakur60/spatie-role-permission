<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user=User::create([
            'name'=>'anil kumar thakur',
            'email'=>'anilkumarthakur60@gmail.com',
            'password'=>bcrypt('aaaassss')
        ]);

        Permission::create(['name' => 'user create']);
        Permission::create(['name' => 'user edit']);
        Permission::create(['name' => 'user show']);
        Permission::create(['name' => 'user delete']);

        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'show role']);
        Permission::create(['name' => 'delete role']);



        $role = Role::create(['name' => 'admin']);
        $user->givePermissionTo(Permission::all());
        $role->givePermissionTo(Permission::all());
        $user->assignRole($role);

    }
}
