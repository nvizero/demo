@extends('layouts.frontend')

@section('title', $cate->title)

@section('content')

<section class="uk-banner-container p-0">
    <div class="owl-carousel owl-theme">
        <!-- banner_item_start -->
        <div class="item">
            <div class="banner-item">
                <div class="bannerImg">
                    <a href="#" class="img-content img-banner">
                        <img src="{{getPagePhoto($viewName)}}" alt="" title="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-container">
    <div class="container">
        <div class="row row-margin">
            <div class="col-md-3 col-sm-12 col-padding">
                <aside class="sideContnet">
                    <ul>
                        <li class="sideInner active">
                            <div class="sideActive">
                                <div class="sideActiveInner">
                                    <span class='uk-text-subtitle'>{{$cate->name}}</span>
                                </div>
                            </div>
                        </li>
                        @foreach($cates as $row)
                        <li class="sideInner">
                            <a href="/aboutList/{{$row->id}}" class="uk-text-subtitle">{{$row->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-sm-12 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="/">首頁</a></li>
                        <li><a href="/products">產品目錄</a></li>
                         breadShow($cate->id) 
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {{$cate->name}}
                    </h1>
                </div>
                <article class='text-container mb-4 bg-light'>
                    {!!$cate->content!!}
                </article>

                <div class="product-container">
                    <div class="row row-margin">
                        <!-- category_item_start -->
                          @foreach($abouts as $pro)
                            <div class="col-md-4 col-sm-6 col-xs-12 col-padding">
                                <!-- item-main_start -->
                                <div class="uk-card-liner">
                                    <div class="uk-card-item">
                                        <div class="uk-card-header">
                                          <a href="/about/{{$cate->parent_id}}" class='img-content img-4by3'>
                                            <img src="/storage/{{$pro->img}}" />
                                          </a>
                                        </div>
                                        <div class="uk-card-body">
                                            <a href="/about/{{$cate->parent_id}}" class="text-title">{{$pro->title}}</a><br />
                                            <a href="/about/{{$cate->parent_id}}" class="uk-text-subtitle">{{$pro->subtitle}}</a>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="/about/{{$cate->parent_id}}" class='ell-text'>{!! ms_str($pro->content ,20)!!}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-main_end -->
                            </div>
                          @endforeach
                    </div>
                </div>
                <!-- 分頁 -->
                <nav aria-label="navigation" class="navigation text-center">
                    <ul class="pagination d-inline-flex m-auto">
                      {{ $abouts->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="/lu/css/page.css">

@endsection

