@extends('layouts.frontend')

@section('title', '產品分類')

@section('content')
<section class="uk-banner-container p-0">
      <div class="owl-carousel owl-theme">
        <!-- banner_item_start -->
        <div class="item">
            <div class="banner-item">
                <div class="bannerImg">
                    <a href="#" class="img-content img-banner">
                        <img src="/lu/images/banner/81438612_p0.png" alt="" title="" />
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
        <div class="row row-margin">
            <div class="col-md-3 col-sm-12 col-padding">
                <aside class="sideContnet">
                    <ul>
                        @foreach($prod_cates as $cate)
                           @if($loop->first)
                            <li class="sideInner">
                                <span class="uk-text-subtitle active">{{$cate->title}}</span>
                            </li>
                          @else
                            <li class="sideInner">
                                <a href="/prod_categories/{{$cate->id}}" class="uk-text-subtitle">{{$cate->title}}</a>
                            </li>
                          @endif
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
                        {!! breadShow($prod->category_id) !!}
                        <li class="active">{{$prod->title}}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <!-- 產品圖片瀏覽+產品介紹_start -->
                <div class="row row-margin">
                    <div class="row row-margin">
                        <div class="col-md-4 col-padding">
                            <div class="big-image">
                                <div class="owl-carousel owl-theme">
                                    {!! showRefImgsTop($prod->id,'Product') !!}
                                </div>
                            </div>
                            <div class="img-control">
                                <div class="owl-carousel owl-theme">
                                    {!! showRefImgs($prod->id,'Product') !!}
                                </div>
                            </div>
                            <div class="inquryContent">
                                <!-- <a href="product.php" class="uk-button">INQURY</a> -->
                                <a href="#" type="button" class="uk-button" data-toggle="modal" data-target="#inquryModal">INQURY</a>
                            </div>
                        </div>
                        <div class="col-md-8 col-padding">
                            <div class="uk-content-subtitle">
                                <h2>
                                  {!! $prod->serial !!}
                                </h2>
                            </div>
                            <div class="uk-content-subtitle">
                                <h2>
                                  {!! $prod->parse_qrcode !!}
                                </h2>
                            </div>
                            <div class="uk-content-title">
                                <h1>
                                  {!! $prod->title !!}
                                </h1>
                            </div>
                            <article class='text-container mb-4 bg-light'>
                              {!! $prod->content !!}
                            </article>
                            <!-- hashTag _start -->
                            <div class="hashTagGroup">
                              {!! hashTags($prod->tags) !!}
                            </div>
                            <!-- hashTag _end -->
                        </div>
                    </div>
                </div>
                <!-- 產品圖片瀏覽+產品介紹_end -->
            </div>
        </div>
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<link rel="stylesheet" href="/lu/css/page.css">
@endsection
