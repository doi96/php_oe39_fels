<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    protected $course;
    protected $lesson;

    public function __construct(Course $course, Lesson $lesson)
    {
        $this->lesson = $lesson;
        $this->course = $course;
    }

    public function show(Course $course)
    {
        $course = Course::with('lessons')->where('id', $course->id)->firstOrFail();
        
        return view('courses.detail', compact('course'));
    }

    public function enroll(Course $course)
    {
        $this->checkValidInModel($course->id)->attach(Auth::user()->id);

        return redirect()->route('course.detail', ['course' => $course]);
    }

    public function leave(Course $course)
    {
        $this->checkValidInModel($course->id)->detach(Auth::user()->id);

        return redirect()->back();
    }

    public function checkValidInModel($id)
    {
        $course = $this->course->findOrFail($id);

        return $course->users();
    }
}
