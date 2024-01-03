
@extends('layouts.frontend')

@section('title', $cate->title)

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
                    <!--     <p class='text-title'>{Title} -->
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
                        <li class="sideInner active">
                            <div class="sideActive">
                                <div class="sideActiveInner">
                                    <span class='uk-text-subtitle'>{分類文章標題}</span>
                                </div>
                                <div class="sideActiveInner">
                                    <a href='javascript:void(0);' class="sideBtn"></a>
                                </div>
                            </div>
                            <ul class="sideInnerMenu">
                                <li class="sideInner"><a href="pageCateB.php">{分類文章列表標題(一)}</a></li>
                                <li class="sideInner"><a href="pageCateB.php">{分類文章列表標題(一)}</a></li>
                                <li class="sideInner"><a href="pageCateB.php">{分類文章列表標題(一)}</a></li>
                                <li class="sideInner"><a href="pageCateB.php">{分類文章列表標題(一)}</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="/">首頁</a></li>
                        <li class="/abouts">關於我們</li>
                        {!! breadShow($cate->id , 'about_categories') !!}
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {{$cate->name}}
                    </h1>
                </div>
                <div class='uk-text-container'>
                    <img src='/storage/{{$cate->img}}' />
                    <p>{{$cate->content}}</p>
                </div>
                <ul class="newsItemContent">
                    @foreach($abouts as $row)
                    <li class="newsItem">
                        <div class="newsItemInner">
                            <img src="/storage/{{$row->img}}" />
                        </div>
                        <div class="newsItemInner">
                            <a href="/about/{{$row->id}}" class="text-title">1111{{$row->title}}</a>
                            <time class="">{{$row->created_at}}</time>
                            <a href="/about/{{$row->id}}">{!! ms_str($row->content ,20)!!}</a>
                        </div>
                    </li>
                    @endforeach
                    <!-- page_item_end -->
                    <!-- page_item_end -->
                </ul>
                <!-- 分頁 -->
                <nav aria-label="navigation" class="navigation">
                    <ul class="pagination">
                      {{ $abouts->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="/lu/css/page.css">

@endsection

