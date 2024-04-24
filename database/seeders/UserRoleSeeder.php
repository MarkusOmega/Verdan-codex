<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admins
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);

        //users
        Role::create(['name' => 'basic_player']);
        Role::create(['name' => 'basic_gm']);

        Role::create(['name' => 'premium_player']);
        Role::create(['name' => 'premium_gm']);
    }
}
