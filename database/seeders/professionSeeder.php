<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class professionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professions')->insert([
            'name' => "Barbarian",
        ]);
        DB::table('professions')->insert([
            'name' => "Fighter",
        ]);
        DB::table('professions')->insert([
            'name' => "Druid",
        ]);
        DB::table('professions')->insert([
            'name' => "Cleric",
        ]);
        DB::table('professions')->insert([
            'name' => "Paladin",
        ]);
        DB::table('professions')->insert([
            'name' => "Ranger",
        ]);
        DB::table('professions')->insert([
            'name' => "Rogue",
        ]);
        DB::table('professions')->insert([
            'name' => "Warlock",
        ]);
        DB::table('professions')->insert([
            'name' => "Wizard",
        ]);
        DB::table('professions')->insert([
            'name' => "Sorcerer",
        ]);
    }
}
