<?php

namespace App\Models;

use App\Models\character;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profession extends Model
{
    use HasFactory;

    public function character()
    {
        return $this->belongsToMany(character::class, 'profession_character');
    }
}
