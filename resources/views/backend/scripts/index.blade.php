@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-12">
            @include('backend.template.search')
            <div class="card">
                <div class="card-body">

                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-10">
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div class="pull-left">
                                    @can("$main-delete")
                                        <a class="btn btn-sm btn-success" href='{{ route("$main.create") }}'>
                                            {{ __('default.create') }}
                                            {{ __("$main.title") }}
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <table id="table"
                                class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                aria-describedby="datatable_info">
                                <thead class="something">
                                    <tr>
                                        @foreach ($fieldsSetting as $title => $attrs)
                                            @if (!isset($attrs['index_show']))
                                                <th>
                                                    @sortablelink($title, __("$main.titles.$title"))
                                                </th>
                                            @endif
                                        @endforeach
                                        <th>{{ __('default.option') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <? $i = 0; ?>
                                    @foreach ($objs as $obj)
                                        <tr @if ($i % 2 == 1) class="odd" @else class="even" @endif>

                                            @foreach ($fieldsSetting as $title => $attrs)
                                                @if (!isset($attrs['index_show']))
                                                    @if ($attrs['type'] == 'file')
                                                        <th>
                                                            <img src="/storage/{{ $obj->$title }}" class="avatar-md">
                                                        </th>
                                                    @elseif(isset($attrs['association']))
                                                        <th>                                                            
                                                            {{ indexAssociaction($attrs['association'], $obj->$title) }}
                                                        </th>
                                                    @else
                                                        <th >
                                                            @if($title == "content")
                                                                <div style="overflow:hidden;white-space: nowrap;text-overflow: ellipsis;width:100px;" >
                                                            @endif 
                                                            
                                                            @if ($title == 'crud')
                                                                {!! __("default.{$obj->$title}") !!}
                                                            @else
                                                                {{ $obj->$title }}
                                                            @endif

                                                            @if($title == "content")
                                                                </div>
                                                            @endif 
                                                            
                                                        </th>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <td>
                                                <form action='{{ route("$main.destroy", isset($obj->key)?$obj->key:"" ) }}' method="POST">

                                                    {{-- <a class="btn btn-sm btn-info" href='{{ route( "$main.show" , $obj->id) }}'>{{__('default.show')}}</a> --}}

                                                    @can("$main-edit")
                                                        <a class="btn btn-sm btn-primary"
                                                            href='{{ route("$main.edit", isset($obj->key)?$obj->key:"" ) }}'>{{ __('default.edit') }}</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')

                                                    @can("$main-delete")
                                                        <button type="submit"
                                                            class="btn btn-sm  btn-danger">{{ __('default.delete') }}</button>
                                                    @endcan

                                                </form>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>

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
