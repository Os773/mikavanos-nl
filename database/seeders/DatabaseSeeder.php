<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //    Roles in the project
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $friend = Role::create(['name' => 'friend']);


        //      Permissions in Project
        $permissions = [
            'create-post',
            'edit-post',
            'delete-post',
            'view-post'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission ]);
        }

        // Assign Permissions
        $admin->syncPermissions($permissions);
        $editor->syncPermissions(['create-post', 'edit-post', 'view-post']);
        $friend->syncPermissions(['view-post']);

        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@mikavanos.nl',
            'password' => bcrypt('AdminVanOs@773')
        ]);
        $adminUser->assignRole('admin');

    }
}
