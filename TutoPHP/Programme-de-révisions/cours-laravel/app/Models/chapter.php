<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',       // Nom du chapitre
        'description', // Description
    ];

    // Définir la relation avec les utilisateurs
    public function users()
    {
        return $this->belongsToMany(User::class, 'chapters_users')
            ->withPivot('completed') // Inclure pivot completed
            ->withTimestamps(); // Date & heure
    }
}
