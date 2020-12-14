@extends('layouts.frontend_layout.master')
@section('content')
    
<div class="col-md-7">
    <div class="follow-user">
        <img src="{{ asset('img/user/user-1.jpg') }}" alt="" class="profile-photo-sm pull-left" />
        <div>
        <h5><a href="timeline.html">Cris Haris</a></h5>
        <a href="#" class="text-green">@lang('user.fol')</a>
        </div>
    </div>
</div>

@endsection
