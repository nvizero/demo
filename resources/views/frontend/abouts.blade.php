@extends('layouts.frontend')

@section('title', 'abbss')

@section('content')

<section class="uk-banner-container">
    <div class="">
        <div class="owl-carousel owl-theme">
            <!-- banner_item_start -->
            <div class="item">
                <div class="banner-item">
                    <div class="bannerImg">
                        <a href="#" class="img-content img-banner">
                          <img src="{{getPagePhoto($viewName)}}" alt="" title="" />
                        </a>
                    </div>
                    <!-- <div class="banner-text"> -->
                    <!--     <p class='text-title'> -->
                    <!--     </p> -->
                    <!--     <p class='uk-text-subtitle'>{Subtitle} -->
                    <!--     </p> -->
                    <!--      -->
                    <!-- </div> -->
                </div>
            </div>
            <!-- banner_item_end -->
        </div>
    </div>
</section>
<!-- page_banner_end -->
<!-- page_content_start -->
<section class="page-container">
    <div class="container">
        <div class="row row-margin">
            <div class="col-md-3 col-padding">
                <aside class="sideContnet">
                    <ul>
                      @foreach($cates as $cate)
                          <li class="sideInner">
                              <a href="/about_cates/{{$cate->id}}" class="uk-text-subtitle">{{$cate->name}}</a>
                          </li>
                      @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="/">首頁</a></li>
                        <li><a href="/abouts">關於我們</a></li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <!-- <div class="uk-content-title"> -->
                <!--     <h1> -->
                <!--         {分類文章列表標題} -->
                <!--     </h1> -->
                <!-- </div> -->
                <!-- <div class='uk-text-container'> -->
                <!--     <img src='images/sampleCategory/uk-text-containerImg.jpg' /> -->
                <!--     <p>{圖文編輯器}</p> -->
                <!-- </div> -->
                <ul class="newsItemContent">
                    <!-- page_item_start -->
                    @foreach($cates as $cate)
                    <li class="newsItem">
                        <div class="newsItemInner">
                            <img src="/storage/{{$cate->img}}" />
                        </div>
                        <div class="newsItemInner">
                            <a href="/about_cates/{{$cate->id}}" class="text-title">{{$cate->name}}</a>
                            <time class="">{{$cate->created_at}}</time>
                            <a href="/about_cates/{{$cate->id}}">{!! ms_str($cate->content ,20)!!}</a>
                        </div>
                    </li>
                    @endforeach
                    <!-- page_item_end -->
                </ul>
                <!-- 分頁 -->
                <nav aria-label="navigation" class="navigation">
                    <ul class="pagination">
                      {{ $cates->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="/lu/css/page.css">

@endsection

