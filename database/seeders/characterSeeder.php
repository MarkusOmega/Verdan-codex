<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class characterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            'name' => "markus",
            'level' => '3',
            'hitpoints' => '80',
            'strength' => '16',
            'dexterity' => '12',
            'constitution' => '18',
            'intelligence' => '12',
            'wisdom' => '10',
            'charisma' => '14',
            'profession_id' => '2',
        ]);
    }
}
