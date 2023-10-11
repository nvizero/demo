@extends('layouts.backend')



@section('content')





{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>{{__('roles.role_name')}}</strong>

            {!! Form::text('name', null, array('placeholder' => __('default.role_name') ,'class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group ">

            <strong>{{__('roles.permission')}}</strong>

            <br />
            <label style="color:brown">
                {{ Form::checkbox('permission[]', '', false, array('class' => 'check_all')) }} {{__('roles.check_all')}}
            </label>
            <div class="col-xs-12 col-sm-12 col-md-12">
                @foreach( $permission as $main => $rows)
                <div class="row">
                    <div class="col-sm-12 col-md-12 cont">
                        <label style="color:blue;">
                            <input type="checkbox" name="{{$main}}" class="area_all">
                            {{__("$main.title")}}
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-12 cont">
                        @foreach($rows as $row)
                        <div class="col-sm-3 col-md-3">
                            <label>
                                {{ Form::checkbox('permission[]', $row['id'], false, array('class' => "$main" )) }}
                                {{ roleStringTraf( $row['name']) }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                </div>
                <br>
                @endforeach

            </div>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">{{__('default.submit')}}</button>

    </div>

</div>

{!! Form::close() !!}
@endsection


@section('css')
<style>
    .cont {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
</style>
@endsection

@section('js')
<script type="text/javascript">
    $("document").ready(function() {
        //全選
        $(".check_all").bind('click', function() {
            if ($(this).prop("checked")) {
                $("input[name='permission[]']").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $("input[name='permission[]']").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });
        //小區全選
        $(".area_all").bind('click', function() {
            let name = $(this).attr("name");            
            if ($("input[name='"+name+"']").prop("checked")) {                
                $("input."+name).each(function() {
                    $(this).prop("checked", true);
                });
            } else {                
                $("input."+name).each(function() {
                    $(this).prop("checked", false);
                });
            }
        });
    })
</script>
@endsection