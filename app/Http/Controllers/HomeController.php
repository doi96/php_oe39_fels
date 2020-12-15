<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Followship;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $follower = Followship::where('follower_id','!=', Auth::user()->id)->get();
        $following = Followship::where('follower_id', Auth::user()->id)->get();
        $courses = Course::all();
        $lesson = Lesson::all();
        $courseEnrolled = $courses->where('is_enrolled', true);
        
        return view('home')->with(compact('follower','following','courses','lesson','courseEnrolled'));
    }

}
