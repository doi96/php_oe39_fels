@extends('layouts.frontend_layout.master')

@section('content')
    <div class="container" id="course_detail">
        <div class="w-75 mx-auto">
            <div id="title">
                <h1>{{ $course->name }}</h1>

                <div id="status">                    
                    @if ($course->isEnrolled)
                        <hr>
                        <span class="badge badge-danger">
                            @lang('messages.front_end.profile.enrolled')
                        </span>    
                    @endif

                </div>
            </div>

            <hr>
    
            <div id="description">
                <p>{{ $course->description }}</p>
            </div>

            @if ($course->isEnrolled)
                <form action="{{ route('courses.leave', ['course' => $course]) }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="@lang('messages.front_end.profile.cancel_enroll')">
                </form>
                <hr>
                <div class="lessons">
                    <h3 class="mb-4">@lang('messages.front_end.profile.lesson')</h3>
                    <div class="lesson-list pl-4">
                        @foreach ($course->lessons as $lesson)
                            @include('lessons.meta', [
                                'lesson' => $lesson,
                            ])
                        @endforeach
                    </div>
                </div>
            @else
                <form action="{{ route('courses.enroll', ['course' => $course]) }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-success" value="@lang('messages.front_end.profile.enroll')">
                </form>
                <hr>
            @endif
            <hr>
        </div>
    </div>
@endsection
