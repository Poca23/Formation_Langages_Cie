<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',       // Titre du chapitre
        'description', // Description (facultatif)
    ];

    /**
     * Définir la relation des chapitres avec les utilisateurs.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'chapters_users')
            ->withPivot('completed') // Inclure le statut de progression
            ->withTimestamps(); // Inclure les dates de création/mise à jour
    }
}
