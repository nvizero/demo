@extends('layouts.frontend')

@section('title','關於我們')
    

@section('content')

<!-- page_banner_start -->
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
                    <div class="banner-text">
                        <p class='text-title'>
                                      {{$about->title}}
                        </p>
                        <p class='uk-text-subtitle'>
                                      {{$about->subtitle}}
                        </p>
                    </div>
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
                        @foreach($abouts as $row)
                        <li class="sideInner active">
                            <a href="/about/{{$row->id}}" class="uk-text-subtitle">{{$row->title}}</a>
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
                        <li class="active"><a href="/about_cates/{{$cates->id}}">{{$cates->name}}</a></li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {{$about->title}}
                    </h1>
                </div>

                <div class='uk-text-container'>
                        {!!$about->content!!}
                </div>

                <!-- <nav aria-label="navigation" class="navigation"> -->
                <!--     <ul class="pagination"> -->
                <!--         <li><a href="#">上一頁</a></li> -->
                <!--         <li><a href="#">下一頁</a></li> -->
                <!--     </ul> -->
                <!-- </nav> -->
                <!-- <div class="shareLinkContent">
                <div class="shareLinkContentInner">
                    <p class='text-title'>分享至：</p>
                    <div class="linkItem">
                        <a href="#" class="linkItemIcon">
                            <img src="images/socialmedia/youtube.svg" />
                        </a>
                    </div>
                    <div class="linkItem">
                        <a href="#" class="linkItemIcon">
                            <img src="images/socialmedia/line.svg" />
                        </a>
                    </div>
                    <div class="linkItem">
                        <a href="#" class="linkItemIcon">
                            <img src="images/socialmedia/wechat.svg" />
                        </a>
                    </div>
                    <div class="linkItem">
                        <a href="#" class="linkItemIcon">
                            <img src="images/socialmedia/twitter.svg" />
                        </a>
                    </div>
                    <div class="linkItem">
                        <a href="#" class="linkItemIcon">
                            <img src="images/socialmedia/facebook.svg" />
                        </a>
                    </div>
                </div>
            </div> -->
                <!-- <div class="hashTagGroup"> -->
                <!--     <a href="hashTagResult.php">#{hashTag}</a> -->
                <!--     <a href="hashTagResult.php">#{hashTag}</a> -->
                <!--     <a href="hashTagResult.php">#{hashTag}</a> -->
                <!--     <a href="hashTagResult.php">#{hashTag}</a> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<link rel="stylesheet" href="/lu/css/page.css">
@endsection
