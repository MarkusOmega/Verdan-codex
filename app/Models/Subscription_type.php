<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription_type extends Model
{
    use HasFactory;

    public function subscriptions(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
