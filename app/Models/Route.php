<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Route extends Model
{
    use HasFactory;
    protected $table = 'routes';

    public function trip(): HasOne
    {
        return $this->hasOne(Trip::class, 'route_id', 'id');
    }
}
