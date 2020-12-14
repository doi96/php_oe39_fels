@extends('layouts.frontend_layout.master')
@section('content')

<div class="col-md-7 col-sm-6">
    <h4 class="grey">@lang('user.edit_profile')</h4>
    <form class="contact-form">
    <div class="form-group">
        <label>@lang('user.name')</label>
        <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required.">
    </div>
    <div class="form-group">
        <label>@lang('user.email')</label>
        <input id="contact-email" type="text" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Email is required.">
    </div>
    <div class="form-group">
        <label>@lang('user.password')</label>
        <input id="contact-phone" type="text" name="phone" class="form-control" placeholder="Enter your phone *" required="required" data-error="Phone is required.">
    </div>
    <div class="form-group">
        <label>@lang('user.avatar')</label>
        <input type="file">
    </div>
    </form>
    <button class="btn-primary">@lang('user.submit')</button>
</div>

@endsection
