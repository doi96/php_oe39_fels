<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
    ];
    
    protected $appends = [
        'is_enrolled',
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

    public function getIsEnrolledAttribute()
    {
        $user = Auth::user();
        $courseId = $this->id;
        $result = User::where('id', $user->id)
            ->whereHas('courses', function($q) use ($courseId){
                $q->where('courses.id', $courseId);
            })
            ->exists();
        
        return !empty($result);
    }
}
