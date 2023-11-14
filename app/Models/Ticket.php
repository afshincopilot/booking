<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mockery\Generator\StringManipulation\Pass\Pass;

class Ticket extends Model
{
    protected $fillable = [
        'user_id',
        'mobile',
        'origin',
        'destination',
        'date',
        'flight_id',
        'flight_key',
        'flight_number',
        'flight_airline',
        'flight_departure',
        'flight_arrival',
        'flight_duration',
        'flight_class',
        'status',
        'flight'
    ];
    protected $casts = ['flight' => 'array'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function flight(): BelongsTo
    {
        return $this->belongsTo(Flight::class);
    }

    public function passengers(): HasMany
    {
        return $this->hasMany(Passenger::class);
    }
}
