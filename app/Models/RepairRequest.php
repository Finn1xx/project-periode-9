<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    // Geef de juiste tabelnaam op als deze anders is dan de modelnaam
    protected $table = 'repair_requests';

    // Geef aan welke velden massaal ingevuld mogen worden
    protected $fillable = [
        'title',
        'description',
        'name',      // Voeg naam toe
        'email',     // Voeg e-mail toe
        'status',
    ];
}
