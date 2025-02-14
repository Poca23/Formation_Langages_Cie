<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'chapters_users')
            ->withPivot('completed')
            ->withTimestamps();
    }

    public function quiz()
    {
        return $this->hasOne(Quiz::class, 'chapter_number', 'id');
    }
}
