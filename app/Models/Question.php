<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'lesson_id',
        'name',
    ];

    public function lession()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }
}
