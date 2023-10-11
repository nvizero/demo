@extends('layouts.backend')


@section('content')




{!! Form::open(array('route' => "$main.store",'method'=>'POST' , 'enctype'=>"multipart/form-data" )) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.account")}}</strong>
            {!! Form::text('account', null, array('placeholder' => '帳號','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.username")}}</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.email")}}</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.password")}}</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.confirm_password")}}</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.status")}}</strong>
            <input type="checkbox" name="status" value="1" placeholder='{{__("$main.titles.status")}}'>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.is_post")}}</strong>
            <input type="checkbox" name="is_post" value="1" placeholder='{{__("$main.titles.is_post")}}'>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __("$main.titles.verify") }}</strong>
            {!! Form::select('verify', $verify, '', [
                'class' => 'form-control',
                'placeholder' => __('default.please_select'),
            ]) !!}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __("$main.titles.canPost") }}</strong>
            {!! Form::select('canPost', $canPost, '', [
                'class' => 'form-control',
                'placeholder' => __('default.please_select'),
            ]) !!}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("$main.titles.avatar")}}</strong>
            <input type="file" name="avatar" value="1" placeholder='{{__("$main.titles.avatar")}}'>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">
            {{__("default.submit")}}
        </button>
    </div>
</div>
{!! Form::close() !!}



@endsection