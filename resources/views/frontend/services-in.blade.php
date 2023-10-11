@extends('layouts.frontend')

@section('title',  $iron->title." ".$iron->title_en." - " )

@section('meta')
    <meta name="description" content="{!! ms_str($iron->content) !!}"/>
    <meta name="title" content="{{ $iron->title." ".$iron->title }} - "/>
    <meta property="og:title" content="{!! ms_str($iron->content) !!}"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="{!! ms_str($iron->content) !!}"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}storage/{{$iron->img}}"/></meta>
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
                            <li><span>
@if (App::getLocale() == 'cn')
{{ $iron->title }}
@else
{{ $iron->title_en }}
@endif
</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page serviceArea">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                                    @if (App::getLocale() == 'cn')
                    <h3 class="subTitle border-bottom font-MT">{{ $iron->title }} <small class="h6">{{ $iron->title_en }}</small></h3>
                                    @else
                    <h3 class="subTitle border-bottom font-MT">{{ $iron->title_en }} <small class="h6">{{ $iron->title }}</small></h3>
                                    @endif
                        @if (App::getLocale() == 'cn')
                            {!! $iron->content !!}
                        @else
                            {!! $iron->content_en !!}
                        @endif
                </div>
                <div class="col-lg-3">
                    <h5 class="subTitle border-bottom text-gray mt-2">CATEGORY</h5>
                    <ul class="categoryList">

                        @foreach ($irons as $row)
                            <li>
                                <a href="/services-in/{{ $row->id }}">
                                    @if (App::getLocale() == 'cn')
                                        {{ $row->title }}
                                    @else
                                        {{ $row->title_en }}
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
