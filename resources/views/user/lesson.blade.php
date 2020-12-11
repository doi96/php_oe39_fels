@extends('layouts.frontend_layout.master')
@section('content')
    
<div class="col-md-7">
    <!-- Post Content
    ================================================= -->
    <div class="post-content">
        <div class="post-container">
            <div class="post-detail">
            <div class="user-info">
                <h5><a href="timeline.html" class="profile-link">LESSON NAME</a> <span class="following">course name</span></h5>
                <p class="text-muted"></p>
                <p class="text-muted">3/5 @lang('user.pass')</p>
            </div>
            <div class="reaction">
                <a class="btn btn-success">@lang('user.timeremining'): 2 mins</a>
            </div>
            <div class="line-divider"></div>
            <div class="post-text">
                <div class="panel panel-default">
                <div class="panel-heading">@lang('user.question') 1</div>
                <div class="panel-body">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            @lang('user.answer') 1
                        </label>
                        </div>
                        <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            @lang('user.answer') 2
                        </label>
                        </div>
                        <div class="radio disabled">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" >
                            @lang('user.answer') 3
                        </label>
                    </div>
                </div>
                </div>
            </div>
            <div class="line-divider"></div>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
    
</div>

@endsection
