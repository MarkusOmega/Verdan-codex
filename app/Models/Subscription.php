<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_type_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function subscriptionType(): BelongsTo
    {
        return $this->belongsTo(Subscription_type::class);
    }
}
