@extends('layouts.frontend')

@section('title', '產品分類')

@section('content')

<!-- page_banner_start -->
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
        <!-- banner_item_end -->
    </div>
</section>
<!-- page_banner_end -->
<!-- page_content_start -->
<section class="page-container">
    <div class="container">
        <!-- 麵包屑_start -->
        <div class="breadcrumb-container">
            <ul>
                <li><a href="/">首頁</a></li>
                <li class="active">產品目錄</li>
            </ul>
        </div>
        <!-- 麵包屑_end -->
        <!-- index_productCategory_owl_start -->
        <section class="category-container">
            <div class="container">
                <div class="row row-margin align-items-center">
                    <div class="col-md-3 col-padding">
                        <div class="uk-content-subtitle text-left">
                            <h3>
                                Category
                            </h3>
                        </div>
                        <div class="uk-content-title text-left">
                            <h2>熱門產品分類</h2>
                        </div>
                    </div>
                    <div class="col-md-9 col-padding">
                        <div class="owl-carousel owl-theme">
                            <!-- item_start -->
                            @foreach($cates as $cate)
                            <div class="item">
                                <!-- item-main_start -->
                                <div class="uk-card-liner">
                                    <div class="uk-card-item">
                                        <div class="uk-card-header">
                                            <a href="/prod_categories/{{$cate->id}}" class='img-content img-4by3'><img src="/storage/{!! $cate->img !!}" /></a>
                                        </div>
                                        <div class="uk-card-body">
                                            <a href="/prod_categories/{{$cate->id}}" class="text-title">{!! $cate->title !!}</a><br />
                                            <a href="/prod_categories/{{$cate->id}}" class="uk-text-subtitle">{!! $cate->subtitle !!}</a>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="/prod_categories/{{$cate->id}}" class='ell-text'>{!! ms_str($cate->content ,20)!!}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-main_end -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 分頁 -->
        <nav aria-label="navigation" class="navigation text-center">
            <ul class="pagination d-inline-flex m-auto">
                {{ $cates->links() }}
            </ul>
        </nav>
    </div>
</section>
<!-- page_content_end -->
<link rel="stylesheet" href="/lu/css/page.css">
@endsection
