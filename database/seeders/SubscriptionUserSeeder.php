<?php

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach($users as $user) {
            if($user->hasRole('free_player')){
                Subscription::create([
                    'subscription_type_id' => 1,
                    'user_id' => $user->id,
                ]);
            }
            if($user->hasRole('paid_player')){
                Subscription::create([
                    'subscription_type_id' => 2,
                    'user_id' => $user->id,
                ]);
            }
            if($user->hasRole('free_dm')){
                Subscription::create([
                    'subscription_type_id' => 3,
                    'user_id' => $user->id,
                ]);
            }
            if($user->hasRole('paid_dm')){
                Subscription::create([
                    'subscription_type_id' => 4,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
