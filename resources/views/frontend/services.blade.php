@extends('layouts.frontend')


@section('title',  "應用領域 Service - "  )

@section('meta')
    <meta name="description" content="應用領域 Service"/>
    <meta name="title" content="應用領域 Service - "/>
    <meta property="og:title" content="應用領域 Service"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="應用領域 Service"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
@endsection
@section('content')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/unitPage.css">
    <link rel="stylesheet" href="/css/services.css">

    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Products And Services</small>
                        <span>{{ __("menu.products") }}</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __("menu.index") }}</a></li>
                            <li><a href="/services">{{ __("menu.services") }}</a></li>
                            <!-- <li><span></span></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page ServiceArea ">
        <div class="container">
            <div class="row serviceList row-cols-lg-2 row-cols-1 g-5">
                @foreach($ironCates as $iron)
                    <div class="col item">
                        <a href="/services-in/{{$iron->id}}">
                            <div class="innerImg">
                                <div class="image" style="background-image: url(/storage/{{$iron->img}});"></div>
                                <h5 class="title">
                        @if (App::getLocale() == 'cn')
                                    <b>{{$iron->title}}</b>
                                    <small class="h6">{{$iron->title_en}}</small>
                        @else
                                    <b>{{$iron->title_en}}</b>
                                    <small class="h6">{{$iron->title}}</small>
                        @endif
                                </h5>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
