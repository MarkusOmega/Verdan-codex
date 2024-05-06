<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'gender',
        'race',
        'profession',
        'description',
        'campaign_id'
    ];

    public function campaign(): BelongsTo {
        return $this->belongsTo(Campaign::class);
    }
}
