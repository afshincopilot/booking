<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Passenger extends Model
{
    protected $fillable = [
        'ticket_id',
        'name',
        'lastname',
        'gender',
        'type',
        'birthday',
        'nationality',
        'na_code',
    ];
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
