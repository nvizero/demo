@extends('layouts.backend')
@section('content')

<form action="{{ route('postCategories.update',$postCategory->id) }}" method="POST">

    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('default.title')}}:</strong>
                <input type="text" name="name" value="{{ $postCategory->name }}" class="form-control" placeholder="{{__('default.title')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('default.able')}}</strong>
                <input type="checkbox" name="able"    {{  ($postCategory->able == 1 ? ' checked' : '') }}
                
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>



</form>




@endsection