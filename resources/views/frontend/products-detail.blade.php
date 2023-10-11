@extends('layouts.frontend')

@section('title',  $semics->title." ".$semics->title_en." - "  )

@section('meta')
    <meta name="description" content="{!! ms_str($semics->content) !!}"/>
    <meta name="title" content="{{ $semics->title." ".$semics->title_en." - " }}"/>
    <meta property="og:title" content="{!! ms_str($semics->content) !!}"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="{!! ms_str($semics->content) !!}"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}storage/{{$semics->img}}"/></meta>
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
                            <li><a href="/products-in?main_id={{ $semics->semicCate_id }}">{{ __("menu.products") }}</a></li>
                            <li><a href="/products-detail/{{$id}}">
                                    @if (App::getLocale() == 'cn')
                                        {{ $semicCate->title }}
                                    @else
                                        {{ $semicCate->title_en }}
                                    @endif

                                </a></li>
                            <li>
                                <span>
                                    @if (App::getLocale() == 'cn')
                                        {{ $semics->title }}
                                    @else
                                        {{ $semics->title_en }}
                                    @endif
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page bg-white">
        <div class="container">
            <div class="row ">
                <div class="col-lg-9">
                        @if (App::getLocale() == 'cn')
                    <h3 class="subTitle border-bottom font-MT">{{ $semics->title }}<br> <small
                            class="h6">{{ $semics->title_en }}</small></h3>
                        @else
                    <h3 class="subTitle border-bottom font-MT">{{ $semics->title_en}}<br>  <small
                            class="h6">{{ $semics->title }}</small></h3>
                        @endif
                    <!-- contentBox 文字編輯器 -->
                    <div class="contentBox">
                        @if (App::getLocale() == 'cn')
                            {!! $semics->content !!}
                        @else
                            {!! $semics->content_en !!}
                        @endif
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="subTitle border-bottom text-gray mt-2">CATEGORY</h5>
                    <ul class="categoryList">
                        @foreach ($semicCates as $cate)
                            <li>
                                <a href="/products-detail/{{ $cate->id }}">
                                    @if (App::getLocale() == 'cn')
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
