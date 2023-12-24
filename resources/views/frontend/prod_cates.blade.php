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
                        <li class="sideInner active">
                            <div class="sideActive">
                                <div class="sideActiveInner">
                                    <span class='uk-text-subtitle'>{{$cate->title}}</span>
                                </div>
                                @if($cate->level!=3)
                                  <div class="sideActiveInner">
                                      <a href='javascript:void(0);' class="sideBtn"></a>
                                  </div>
                                @endif
                            </div>
                            <ul class="sideInnerMenu">
                                @foreach($prod_cates as $pcate)
                                  <li class="sideInner"><a href="/prod_categories/{{$pcate->id}}">{{$pcate->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($pcates2 as $row)
                        <li class="sideInner">
                            <a href="/prod_categories/{{$row->id}}" class="uk-text-subtitle">{{$row->title}}</a>
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
                        {!! breadShow($cate->id) !!}
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {{$cate->title}
                    </h1>
                </div>
                <article class='text-container mb-4 bg-light'>
                    {!!$cate->content!!}
                </article>

                <div class="product-container">
                    <div class="row row-margin">
                        <!-- category_item_start -->
                        @if($cate->level==3)
                          @foreach($prods as $pro)
                            <div class="col-md-4 col-sm-6 col-xs-12 col-padding">
                                <!-- item-main_start -->
                                <div class="uk-card-liner">
                                    <div class="uk-card-item">
                                        <div class="uk-card-header">
                                            <a href="/prod_details/{{$pro->id}}/{{$cate->parent_id}}" class='img-content img-4by3'><img src="/storage/{{$pro->imgs}}" /></a>
                                        </div>
                                        <div class="uk-card-body">
                                            <a href="/prod_details/{{$pro->id}}/{{$cate->parent_id}}" class="text-title">{{$pro->title}}</a><br />
                                            <a href="/prod_details/{{$pro->id}}/{{$cate->parent_id}}" class="uk-text-subtitle">{{$pro->subtitle}}</a>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="/prod_details/{{$pro->id}}/{{$cate->parent_id}}" class='ell-text'>{!! ms_str($pro->content ,20)!!}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-main_end -->
                            </div>
                          @endforeach
                        @else
 
                          @foreach($prod_cates as $pcate)
                          <div class="col-md-4 col-sm-6 col-xs-12 col-padding">
                              <!-- item-main_start -->
                              <div class="uk-card-liner">
                                  <div class="uk-card-item">
                                      <div class="uk-card-header">
                                          <a href="/prod_categories/{{$pcate->id}}" class='img-content img-4by3'><img src="/storage/{{$pcate->img}}" /></a>
                                      </div>
                                      <div class="uk-card-body">
                                          <a href="/prod_categories/{{$pcate->id}}" class="text-title">{{$pcate->title}}</a><br />
                                          <a href="/prod_categories/{{$pcate->id}}" class="uk-text-subtitle">{{$pcate->subtitle}}</a>
                                      </div>
                                      <div class="uk-card-footer">
                                          <a href="/prod_categories/{{$pcate->id}}" class='ell-text'>{!! ms_str($pcate->content ,20)!!}</a>
                                      </div>
                                  </div>
                              </div>
                              <!-- item-main_end -->
                          </div>
                          @endforeach
                        @endif
                    </div>
                </div>
                <!-- 分頁 -->
                <nav aria-label="navigation" class="navigation text-center">
                    <ul class="pagination d-inline-flex m-auto">
                      {{ $prod_cates->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="/lu/css/page.css">

@endsection

