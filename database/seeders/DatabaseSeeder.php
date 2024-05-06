<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserRoleSeeder::class,
            PermissionsSeeder::class,
            SubscriptionTypeSeeder::class,
        ]);
        // User::factory(10)->create();

        $user1= User::factory()->create([
            'name' => 'admin',
            'email' => 'm11severs@gmail.com',
            'password' => Hash::make('secret'),
            'active' => 1,
        ]);
        $user1->assignRole('superadmin');

        $user2= User::factory()->create([
            'name' => 'test-basic-player',
            'email' => 'basic-player@test.nl',
            'password' => Hash::make('secret'),
            'active' => 1,
        ]);
        $user2->assignRole('basic_player');

        $user3= User::factory()->create([
            'name' => 'test-premium-player',
            'email' => 'premium-player@test.nl',
            'password' => Hash::make('secret'),
            'active' => 1,
        ]);
        $user3->assignRole('premium_player');

        $user4= User::factory()->create([
            'name' => 'test-basic-dm',
            'email' => 'basic-dm@test.nl',
            'password' => Hash::make('secret'),
            'active' => 1,
        ]);
        $user4->assignRole('basic_gm');

        $user5= User::factory()->create([
            'name' => 'test-premium-dm',
            'email' => 'premium-dm@test.nl',
            'password' => Hash::make('secret'),
            'active' => 1
        ]);
        $user5->assignRole('premium_gm');
    }
}
