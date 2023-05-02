<?php

namespace App\Models;

use App\Models\profession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class character extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name', 
        'level', 
        'hitpoints',
        'strenght',
        'dexterity',
        'constitution',
        'intelligence',
        'wisdom',
        'charisma',
        'profession_id',
    ];

    public function professions()
    {
        return $this->belongsToMany(profession::class, 'profession_character');
    }
}
