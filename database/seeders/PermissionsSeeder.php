<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Profiles
        Permission::create(['name' => 'view_profile']);
        Permission::create(['name' => 'edit_profile']);

        // Users
        Permission::create(['name' => 'view_user']);
        Permission::create(['name' => 'edit_user']);
        Permission::create(['name' => 'edit_user_role']);
        Permission::create(['name' => 'delete_user']);
        Permission::create(['name' => 'impersonate_user']);

        // Dashboard
        Permission::create(['name' => 'view_dashboard']);
        Permission::create(['name' => 'edit_dashboard']);

        // World building
        Permission::create(['name' => 'view_worlds']);
        Permission::create(['name' => 'create_worlds']);
        Permission::create(['name' => 'edit_worlds']);
        Permission::create(['name' => 'delete_worlds']);

        // Locations
        Permission::create(['name' => 'view_locations']);
        Permission::create(['name' => 'create_locations']);
        Permission::create(['name' => 'edit_locations']);
        Permission::create(['name' => 'delete_locations']);

        // Characters
        Permission::create(['name' => 'view_characters']);
        Permission::create(['name' => 'create_characters']);
        Permission::create(['name' => 'edit_characters']);
        Permission::create(['name' => 'delete_characters']);

        // Beastiary
        Permission::create(['name' => 'view_beastiary']);
        Permission::create(['name' => 'create_beastiary']);
        Permission::create(['name' => 'edit_beastiary']);
        Permission::create(['name' => 'delete_beastiary']);

        // Items
        Permission::create(['name' => 'view_items']);
        Permission::create(['name' => 'create_items']);
        Permission::create(['name' => 'edit_items']);
        Permission::create(['name' => 'delete_items']);

    }
}
