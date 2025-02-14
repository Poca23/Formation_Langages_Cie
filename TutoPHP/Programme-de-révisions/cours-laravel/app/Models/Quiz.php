<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'chapter_number',
    ];

    /**
     * Relation avec les questions du quiz
     */
    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id', 'id');
    }

    /**
     * Relation avec les résultats des utilisateurs
     */
    public function results()
    {
        return $this->hasMany(UserQuizResult::class);
    }

    /**
     * Relation avec le chapitre associé
     */
    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'chapter_number', 'id');
    }
}
