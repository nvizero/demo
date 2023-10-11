@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-12">
        @include("backend.template.search")
        <div class="card">
            <div class="card-body">

                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div class="pull-left">
                                @can('customers-create')
                                <a class="btn btn-sm btn-success" href="{{ route('customers.create') }}">
                                    {{__('default.create')}}
                                    {{__('customers.title')}}
                                </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                <thead>
                                    <tr role="row">
                                        <th>No</th>
                                        <th>{{__('customers.titles.avatar')}}</th>
                                        <th>{{__('customers.titles.name')}}</th>
                                        <th>{{__('customers.titles.email')}}</th>
                                        <th>{{__('customers.titles.status')}}</th>
                                        <th>{{__('customers.titles.is_post')}}</th>
                                        <th>{{__('customers.titles.created_at')}}</th>
                                        <th>{{__('default.option')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <? $i = 0; ?>
                                    @foreach ($customers as $key => $user)
                                    <tr @if( $i %2==1 ) class="odd" @else class="even" @endif>
                                        <td>{{ ++$i }}</td>
                                        <th>
                                            @if($user->avatar)
                                            <img src="/storage/{{$user->avatar}}" style="width:50px;">
                                            @endif
                                        </th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ isset($verify[$user->verify])?$verify[$user->verify]:"" }}</td>
                                        <td>{{ isset($isPost[$user->is_post])?$isPost[$user->is_post]:"" }}</td>
                                        <td>{{ $user->created_at }}</td>

                                        <td>
                                            @can("$main-create")
                                            <a class="btn btn-primary" href="{{ route('customers.edit',$user->id) }}">{{__('default.edit')}}</a>
                                            @endcan

                                            @can("$main-delete")
                                            {!! Form::open(['method' => 'DELETE','route' => ['customers.destroy', $user->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit( __('default.delete'), ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                第 {!! $customers->currentPage() !!} 頁
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                {!! $customers->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>


@endsection