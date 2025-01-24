<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * Attributs pouvant être assignés en masse (fillable).
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Attributs masqués pour la sérialisation.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Types des colonnes (casts).
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Définir la relation de l'utilisateur avec les chapitres.
     */
    public function chapters()
    {
        return $this->belongsToMany(Chapter::class, 'chapters_users')
            ->withPivot('completed') // Inclure pivot "completed"
            ->withTimestamps(); // Inclure les timestamps
    }
}
