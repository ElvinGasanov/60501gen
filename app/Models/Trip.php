<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Trip extends Model
{
    use HasFactory;
    protected $table = 'trips';

    public function cargo(): HasOne
    {
        return $this->hasOne(Cargo::class, 'trip_id', 'id');
    }

    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class, 'transport_id', 'id');
    }
}
