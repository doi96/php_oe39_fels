@extends('layouts.frontend_layout.master')
@section('content')

    <div class="col-sm-8 col-md-7">
    <div class="thumbnail">
    <img src="{{ asset('img/user/user-1.jpg') }}" alt="user">
      <div class="caption">
        <h3>{{ $user->name }}</h3>
        <span class="label label-info">300 @lang('user.word_learned')</span>
        <span class="label label-primary">{{$follower->count()}} @lang('user.followers')</span>
        <span class="label label-success">{{$following->count()}} @lang('user.followings')</span>
        <p>Email: {{ $user->email }}</p>
        <p><a href="#" class="btn btn-primary" role="button">@lang('user.edit_profile')</a> <a href="#" class="btn btn-default" role="button">Follow</a></p>
      </div>
      <p>@lang('user.course_progress'):</p>
      <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        <span class="sr-only">40% @lang('user.complete')</span>
      </div>
    </div>
    </div>
  </div>

@endsection
