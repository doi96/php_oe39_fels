@extends('layouts.frontend_layout.master')
@section('content')
    
<div class="col-md-7">
   <div class="panel-body">
        <div class="col-md-6 static">
            <div class="suggestions" id="sticky-sidebar">
                <h4 class="grey">@lang('user.all_user')</h4>
                <div class="follow-user">
                    <img src="{{ asset('img/user/user-1.jpg') }}" alt="" class="profile-photo-sm pull-left" />
                    <div>
                    <h5><a href="timeline.html">Diana Amber</a></h5>
                    <p>Email: abc@123.com</p>
                    <p>123 @lang('user.word_learned')</p>
                    <a type="button" href="#" class="btn btn-success">@lang('user.follow')</a>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</div>

@endsection
