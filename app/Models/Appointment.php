<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'appointment_date', 'notes'];

    // Cast `appointment_date` to a datetime object automatically
    protected $casts = [
        'appointment_date' => 'datetime',
    ];
}
