@extends('layouts.frontend')

@section('title',  "產品試算" )

@section('meta')
    <meta name="description" content="產品試算"/>
    <meta name="title" content="產品試算 - "/>
    <meta property="og:title" content="產品試算"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="產品試算"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
@endsection


@section('content')

<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/unitPage.css">
<link rel="stylesheet" href="/css/contact.css">
    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Estimate</small>
                        <span>{{__('contacts.calc')}}</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __("menu.index") }}</a></li>
                            <li><a href="/calc">{{ __("contacts.calc") }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  style="display: block;  overflow: hidden;">
    <iframe src="{{env('APP_URL')}}/j/magnetism.html"  style="width: 100%;height: 1100px;display: block;">
      你的瀏覽器不支援 iframe
    </iframe>
    </section>
@endsection
