<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage alumni',
            'manage mitra',
            'manage pendaftaran',
            'manage biaya',
            'manage beasiswa',
            'manage fasilitas',
        ];

        // Create permissions if they don't exist
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission]
            );
        }

        // Create super_admin role if it doesn't exist
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        // Create user for the super_admin
        $user = User::firstOrCreate([
            'name' => 'AdminPLM',
            'email' => 'adminplm@gmail.com',
            'password' => bcrypt('adminplm01!'),
        ]);

        // Assign role to the user
        $user->assignRole($superAdminRole);
    }
}