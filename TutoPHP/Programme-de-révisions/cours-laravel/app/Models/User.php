<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Relation entre User et Chapter.
     * Un utilisateur peut suivre plusieurs chapitres.
     */
    public function chapters()
    {
        return $this->belongsToMany(Chapter::class, table: 'chapters_users')
            ->withPivot('completed')
            ->withTimestamps();
    }
}
