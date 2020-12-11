<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class,'course_user', 'course_id', 'user_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id', 'id');
    }

    public function words()
    {
        return $this->hasMany(Word::class, 'course_id', 'id');
    }
}
