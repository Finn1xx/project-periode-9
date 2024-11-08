<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Geef de velden aan die je wilt massaal invullen
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',  // De rol van de gebruiker (bijv. 'user' of 'admin')
    ];

    // Geef de velden aan die verborgen moeten zijn (bijv. wachtwoord en tokens)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Zorg ervoor dat het 'email_verified_at' veld als een datetime wordt behandeld
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Voeg een mutator toe om de rol van de gebruiker in te stellen
    public function setRoleAttribute($value)
    {
        // Als er geen waarde is opgegeven voor de rol, zet het dan op 'user'
        if (empty($value)) {
            $this->attributes['role'] = 'user'; // Standaard rol is 'user'
        } else {
            $this->attributes['role'] = $value; // Anders, stel de opgegeven rol in
        }
    }
}
