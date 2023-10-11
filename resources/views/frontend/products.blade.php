@extends('layouts.frontend')

@section('title',  $iron->title." ".$iron->title_en." - " )

@section('meta')
    <meta name="description" content="{{$iron->title." ".$iron->title_en}}"/>
    <meta name="title" content="{{$iron->title." ".$iron->title_en}} - "/>
    <meta property="og:title" content="聯絡我們"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="{{$iron->title." ".$iron->title_en}}"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
@endsection

@section('content')
    <link rel="stylesheet" href="/css/unitPage.css">

    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Products</small>
                        <span>{{ __("menu.products") }}</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __("menu.index") }}</a></li>
                            <li><a href="/products">{{ __("menu.products") }}</a></li>
                            <!-- <li><span></span></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page ProductArea">
        <div class="container">

            <div class="row productTypeList g-3">
                @foreach ($semic_cates as $cate)
                    <div class="col-lg-4">
                        <a href="/products-in/{{$cate->id}}">
                            <h5 class="productType">
                                <b>{{$cate->title}}</b>
                                <small class="h6">{{$cate->title_en}}</small>
                            </h5>
                            <div class="innerImg">
                                <div class="image" style="background-image: url(/storage/{{$cate->img}});">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
@endsection
