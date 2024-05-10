<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cargo extends Model
{
    use HasFactory;
    protected $table = 'cargos';

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
}
