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

    public function completedChapters()
    {
        return $this->belongsToMany(Chapter::class, 'chapters_users')
            ->withPivot('completed')
            ->withTimestamps();
    }

    public function currentChapter()
    {
        return $this->completedChapters()
            ->wherePivot('completed', false)
            ->orderBy('id')
            ->first();
    }
}
