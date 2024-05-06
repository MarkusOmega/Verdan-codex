<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'setting',
        'description'
    ];

    public function characters(): hasMany {
        return $this->hasMany(Character::class);
    }
}
