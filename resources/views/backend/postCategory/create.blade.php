@extends('layouts.backend')



@section('content')

 



 



<form action="{{ route('postCategories.store') }}" method="POST">

    @csrf



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('default.title')}}:</strong>
                <input type="text" name="name" class="form-control" placeholder="{{__('default.title')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('default.able')}}</strong>
                <input type="checkbox" name="able" value="1" placeholder="{{__('default.able')}}">
            </div>
        </div>

         

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>




@endsection