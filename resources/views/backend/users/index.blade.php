@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div class="pull-left">
                                @can('users-create')
                                <a class="btn btn-sm btn-success" href="{{ route('users.create') }}">
                                    {{__('default.create')}}
                                    {{__('users.title')}}
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
                                        <th>使用者</th>
                                        <th>{{__('users.titles.email')}}/帳號</th>
                                        <th>{{__('default.option')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <? $i = 0; ?>
                                    @foreach ($users as $key => $user)
                                    <tr @if( $i %2==1 ) class="odd" @else class="even" @endif>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @can("$main-create")
                                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">{{__('default.edit')}}</a>
                                            @endcan

                                            @can("$main-delete")
                                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
                                第 {!! $users->currentPage() !!} 頁
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                {!! $users->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>


@endsection
