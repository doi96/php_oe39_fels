<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'name',
        'course_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'lesson_user' ,'lesson_id' ,'user_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id' ,'id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'lesson_id', 'id');
    }
}
