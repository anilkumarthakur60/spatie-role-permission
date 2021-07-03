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


        $permissions = [
            'user-create',
            'user-edit',
            'user-show',
            'user-delete',

            'role-create',
            'role-edit',
            'role-show',
            'role-delete',


        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}