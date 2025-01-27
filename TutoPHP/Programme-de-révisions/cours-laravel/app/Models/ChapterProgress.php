<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChapterProgress extends Model
{
    protected $table = 'chapter_progress';
    protected $fillable = ['user_id', 'chapter_id', 'completed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
