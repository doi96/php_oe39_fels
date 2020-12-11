@extends('layouts.frontend_layout.master')
@section('content')
    
<div class="col-md-7">
    <!-- Post Content
    ================================================= -->
    <div class="post-content">
        <img src="{{ asset('img/course/8.jpg') }}" alt="post-image" class="img-responsive post-image" />
        <div class="post-container">
            <div class="post-detail">
            <div class="user-info">
                <h5><a href="timeline.html" class="profile-link">COURSE NAME</a> <span class="following">3 @lang('user.lesson')</span></h5>
                <p class="text-muted">2/3 @lang('user.lesson')</p>
            </div>
            <div class="reaction">
                <a class="btn btn-success">@lang('user.open_sourse')</a>
                <a class="btn btn-info"> @lang('user.all_word_list')</a>
            </div>
            <div class="line-divider"></div>
            <div class="post-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="line-divider"></div>
            </div>
        </div>
    </div>
</div>

@endsection
