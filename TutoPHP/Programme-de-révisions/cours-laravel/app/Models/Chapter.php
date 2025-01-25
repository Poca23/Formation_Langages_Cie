<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Relation entre Chapter et User.
     * Un chapitre peut être suivi par plusieurs utilisateurs.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'chapters_users')
            ->withPivot('completed')
            ->withTimestamps();
    }
}
