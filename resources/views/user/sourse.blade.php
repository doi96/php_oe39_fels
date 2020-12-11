@extends('layouts.frontend_layout.master')
@section('content')
    
<div class="col-md-7">
    <!-- Post Content
    ================================================= -->
    <div class="post-content">
        <div class="post-container">
            <div class="post-detail">
            <div class="user-info">
                <h5><a href="timeline.html" class="profile-link">SOURSE NAME</a> <span class="following">3 @lang('user.lesson')</span></h5>
            </div>
            <div class="line-divider"></div>
            </div>
        </div>
    </div>
    <div class="post-content">
        <div class="post-container">
            <div class="post-detail">
            <div class="user-info">
                <h5><a href="timeline.html" class="profile-link">LESSON NAME</a> <span class="following">course name</span></h5>
                <p class="text-muted">5/10 @lang('user.pass')</p>
                <p class="text-muted">@lang('user.pass')</p>
            </div>
            <div class="reaction">
                <a class="btn btn-success">@lang('user.start_lesson')</a>
                <a class="btn btn-info"> @lang('user.all_word_list')</a>
            </div>
            <div class="line-divider"></div>
            <div class="post-text">
                <p>@lang('user.exam') 1: 3 @lang('user.score')</p>
            </div>
            <div class="line-divider"></div>
            </div>
        </div>
    </div>
</div>

@endsection
