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

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable"
                                    class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                    style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                    aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th>No</th>
                                            @foreach ($titles as $num => $title)
                                                <th>{{ $title }}</th>
                                            @endforeach
                                            <th>{{ __('default.option') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <? $i = 0; ?>
                                        @foreach ($objs as $obj)
                                            <tr @if ($i % 2 == 1) class="odd" @else class="even" @endif>
                                                <td>{{ ++$i }}</td>
                                                @foreach ($fieldsSetting as $key => $title)                                                    
                                                    @if (in_array($title, array_keys($initFieldsSetting)))                                                                                                                 
                                                        <th>{{indexAssociaction( $initFieldsSetting[$title]['association'], $obj->$title )}} </th>
                                                    @else
                                                        <th>

                                                            <div
                                                                style="text-overflow: ellipsis; white-space: nowrap; overflow:hidden;">

                                                                {{ $obj->$title }}
                                                            </div>
                                                        </th>
                                                    @endif
                                                @endforeach
                                                <td>
                                                    option
                                                </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                    {{ __('default.no') }} {!! $objs->currentPage() !!} {{ __('default.page') }}
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                    {!! $objs->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
