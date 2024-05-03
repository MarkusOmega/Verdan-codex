<?php

namespace Database\Seeders;

use App\Models\Subscription_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Free player
        Subscription_type::create([
            'name' => 'free_player',
            'price' => 0, // euro's
            'duration' => 0, // months
        ]);

        //Paid player
        Subscription_type::create([
            'name' => 'Paid_player',
            'price' => 15, // euro's
            'duration' => 12, // months
        ]);

        //Free dm
        Subscription_type::create([
            'name' => 'free_dm',
            'price' => 0, // euro's
            'duration' => 0, // months
        ]);

        //Paid dm
        Subscription_type::create([
            'name' => 'Paid_dm',
            'price' => 15, // euro's
            'duration' => 12, // months
        ]);
    }
}
