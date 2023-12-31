<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['origin', 'destination', 'date', 'flights'];
    protected $casts = ['flights' => 'array'];
}
