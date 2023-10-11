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
                                @can('product-create')
                                <a class="btn btn-sm btn-success" href="{{ route('products.create') }}">
                                    {{__('default.create')}}
                                    {{__('product.title')}}
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
                                        <th>{{__('default.title')}}</th>
                                        <th>{{__('default.details')}}</th>
                                        <th>{{__('default.option')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <? $i = 0; ?>
                                    @foreach ($products as $product)


                                    <tr @if( $i %2==1 ) class="odd" @else class="even" @endif>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($product->detail, 12, $end='...') }}
                                        </td>
                                        <td>
                                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                                <a class="btn btn-sm btn-info" href="{{ route('products.show',$product->id) }}">{{__('default.show')}}</a>

                                                @can('product-edit')
                                                <a class="btn btn-sm btn-primary" href="{{ route('products.edit',$product->id) }}">{{__('default.edit')}}</a>
                                                @endcan

                                                @csrf
                                                @method('DELETE')

                                                @can('product-delete')
                                                <button type="submit" class="btn btn-sm  btn-danger">{{__('default.delete')}}</button>
                                                @endcan

                                            </form>
                                        </td>

                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                第 {!! $products->currentPage() !!} 頁 
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                {!! $products->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>


@endsection