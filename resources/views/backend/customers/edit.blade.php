@extends('layouts.backend')
@section('content')
    {!! Form::model($user, [
        'method' => 'PATCH',
        'enctype' => 'multipart/form-data',
        'route' => ["$main.update", $user->id],
    ]) !!}
    <div class="row">
        {!! Form::hidden('id', $user->id) !!}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__("$main.titles.account")}}</strong>
                {!! Form::text('account', $user->account, array('placeholder' => '帳號','class' => 'form-control' ,'readonly')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.name") }}</strong>
                {!! Form::text('name', $user->name, ['placeholder' => 'Name', 'class' => 'form-control' ] ) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.email") }}</strong>
                {!! Form::text('email', $user->email, ['placeholder' => 'Email', 'class' => 'form-control','readonly'=>true]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.password") }}</strong>
                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.confirm_password") }}</strong>
                {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.status") }}</strong>


                <input type="checkbox" name="status" value="1" placeholder='{{ __("$main.titles.status") }}'
                    @if ($user->status == 1) checked="true" @endif>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.is_post") }}</strong>
                {!! Form::select('is_post', $isPost, $user->is_post, [
                    'class' => 'form-control',
                    'placeholder' => __('default.please_select'),
                ]) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.verify") }}</strong>
                {!! Form::select('verify', $verify, $user->is_post, [
                    'class' => 'form-control',
                    'placeholder' => __('default.please_select'),
                ]) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.canPost") }}</strong>
                {!! Form::select('canPost', $canPost, $user->is_post, [
                    'class' => 'form-control',
                    'placeholder' => __('default.please_select'),
                ]) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __("$main.titles.avatar") }}</strong>
                <input type="file" name="avatar" placeholder='{{ __("$main.titles.avatar") }}'>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{ __('default.submit') }}</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
