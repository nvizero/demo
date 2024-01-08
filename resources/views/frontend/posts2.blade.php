@extends('layouts.frontend')

@section('title', '最新消息')

@section('content')

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
                                    <span class='uk-text-subtitle'>最新消息列表</span>
                                </div>
                                @if($cate->level!=3)
                                  <div class="sideActiveInner">
                                      <a href='javascript:void(0);' class="sideBtn"></a>
                                  </div>
                                @endif
                            </div>

                            <ul class="sideInnerMenu">
                                @foreach($prod_cates as $pcate)
                                  <li class="sideInner"><a href="/posts_categories/{{$pcate->id}}">{{$pcate->title}}</a></li>
                                @endforeach
                            </ul>

                            @foreach($pcates2 as $row)
                            <li class="sideInner">
                                <a href="/posts_categories/{{$row->id}}" class="uk-text-subtitle">{{$row->title}}</a>
                            </li>
                            @endforeach
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="/">首頁</a></li>
                        <li><a href="/products">產品目錄</a></li>
                        {!! breadShow($cate->id , 'post_cates') !!}
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {{$cate->title}}
                    </h1>
                    <p>{!! $cate->saylittle!!}</p>
                </div>
                <div class='uk-text-container'>
                    <img src='images/sampleCategory/uk-text-containerImg.jpg' />
                    <p>
                        {!!$cate->content!!}
                    </p>
                </div>
                <ul class="newsItemContent">
                  @if($cate->level==3)
                    @foreach($posts as $pro)
                    <li class="newsItem">
                        <div class="newsItemInner">
                            <img src="/storage/{{$pro->img}}" />
                        </div>
                        <div class="newsItemInner">
                            <a href="/post/{{$pro->id}}" class="text-title">{{$cate->title}}</a>
                            <time class="">{{$pro->start}} - {{$pro->end}}</time>
                            <a href="/post/{{$pro->id}}">{!! $pro->saylittle  !!}</a>
                        </div>
                    </li>
                    @endforeach
                  @else
                    @foreach($prod_cates as $pcate)
                    <li class="newsItem">
                        <div class="newsItemInner">
                            <img src="/storage/{{$pcate->img}}" />
                        </div>
                        <div class="newsItemInner">
                            <a href="/posts_categories/{{$pcate->id}}" class="text-title">{{$pcate->title}}</a>
                            <time class="">{{$pcate->start}} - {{$pcate->end}}</time>
                            <a href="/posts_categories/{{$pcate->id}}">{!! $pcate->saylittle  !!}</a>
                        </div>
                    </li>
                    @endforeach
                  @endif
                </ul>
                <!-- 分頁 -->
                <nav aria-label="navigation" class="navigation">
                    <ul class="pagination">
                      @if($cate->level==3)
                          {{ $posts->links() }}
                      @else
                          {{ $prod_cates->links() }}
                      @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
  <link rel="stylesheet" href="/lu/css/page.css">

@endsection
