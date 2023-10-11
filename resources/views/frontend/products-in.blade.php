@extends('layouts.frontend')

@section('title',  $catmain->title." ".$catmain->title_en." - "  )

@section('meta')
    <meta name="description" content=" 聯絡我們"/>
    <meta name="title" content="聯絡我們 - "/>
    <meta property="og:title" content="聯絡我們"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="聯絡我們"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
@endsection

@section('content')
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/unitPage.css">
<link rel="stylesheet" href="/css/products.css">
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
                            <li><a href="/products-in?main_id={{$main_id}}">{{ __("menu.products") }}</a></li>
            <li>
            <span>
              @if (app()->getlocale() == 'cn')
                  {{$catmain->title}}
              @else
                  {{$catmain->title_en}}
              @endif
            </span>
            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page ProductArea">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
              @if (app()->getlocale() == 'cn')
                    <h3 class="subTitle border-bottom font-MT">              {{$catmain->title}} <small
                            class="h6">{{ $catmain->title_en }}</small></h3>
              @else
                    <h3 class="subTitle border-bottom font-MT">              {{$catmain->title_en}} <small
                            class="h6">{{ $catmain->title }}</small></h3>
              @endif
                    <div class="row row-cols-lg-3 row-cols-2 productList g-4">
                        <!-- item -->
                        @foreach($semics as $row)
                        <div class="col item">
                            <a href="/products-detail/{{$row->id}}">
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image"
                                            style="background-image: url(/storage/{{$row->img}});"></div>
                                    </div>
                                </div>
                                <div class="Txt">
              @if (app()->getlocale() == 'cn')
                                    <b class="h4">{{$row->title}}</b>
                                    <small class="h6">{{$row->title_en}}</small>
              @else
                                    <b class="h4">{{$row->title_en}}</b>
                                    <small class="h6">{{$row->title}}</small>
              @endif
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="subTitle border-bottom text-gray mt-2">CATEGORY</h5>
                    <ul class="categoryList">
                        @foreach($bars as $cate)
                            <li>
                                <a href="/products-in?main_id={{$cate->id}}">
                                    @if(App::getLocale()=='cn')
                                        {{ $cate->title }}
                                    @else
                                        {{ $cate->title_en }}
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
