@extends('layouts.frontend')

@section('meta')
    <meta name="description" content="富磁特科技的團隊,是由具有25年以上具有專業的磁性材料及設備研發與設計、銷售領域豐富經驗 的一群技術者所組成,以最有效益及效能的方式來滿足各產業對磁材與應用設備的求,富磁特公司 秉持一貫的專業建議提供最佳的品質服"/>
    <meta name="title" content="富磁特科技"/>
    <meta property="og:title" content="富磁特科技"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="富磁特科技的團隊,是由具有25年以上具有專業的磁性材料及設備研發與設計、銷售領域豐富經驗 的一群技術者所組成,以最有效益及效能的方式來滿足各產業對磁材與應用設備的求,富磁特公司 秉持一貫的專業建議提供最佳的品質服"/>
    <meta property="og:image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
@endsection

@section('content')
    <!-- slick -->

    <link rel="stylesheet" href="/css/home.css">
    <section class="bannerArea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 g-0">
                    <div class="bannerSlick">
                        <!-- item -->
          @foreach($ads as $ad)
          <div class="item">
            <a href="{{$ad->link}}">
              <div class="innerImg">
                <div class="image" style="background-image: url(/storage/{{$ad->ad_img}});"></div>
              </div>
            </a>
          </div>
          @endforeach
                        <!-- item -->
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="page aboutArea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    @if (App::getLocale() == 'cn')
                        {!! $about[0]->text !!}
                    @else
                        {!! $aboutEN[0]->text !!}
                    @endif
                </div>
                <div class="col-lg-6">
                    <img src="/images/home/about-img.png" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="page ProductArea">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="unitTitle pt-5 border-top">
                        <small>Products</small>
                        <span>{{ __("products.item") }}</span>
                    </h3>
                </div>

            </div>
            <div class="row productTypeList g-3">
                @foreach ($semics as $semic)
                    <div class="col-lg-4">
                        <a href="/products-detail/{{$semic->id}}">
                            <h5 class="productType">

                    @if (App::getLocale() == 'cn')
                            <b>{{ $semic->title }}</b>
                            <small class="h6">{{ $semic->title_en }}</small>
                    @else
                            <b>{{ $semic->title_en }}</b>
                            <small class="h6">{{ $semic->title }}</small>
                    @endif
                            </h5>
                            <div class="innerImg">
                                <div class="image" style="background-image: url(/storage/{{ $semic->img }});"></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="page ServiceArea bg-green">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="unitTitle text-center text-white">
                        <small class="text-white">Products And Services</small>
            @if (App::getLocale() == 'cn')
                        <span>設備·服務·應用</span>
            @else
                        <span>Products And Services</span>
            @endif
                    </h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col g-0">
                    <div class="serviceList serviceSlick">
                        @foreach ($irons as $row)
                            <div class="item">
                                <a href="/services-in/{{$row->id}}">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(/storage/{{ $row->img }});">
                                        </div>
                                        <h5 class="title">
                                            <b>{{ $row->title }}</b>
                                            <small class="h6">{{ $row->title_en }}</small>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>


        <div class="text-center mt-5">
          <a href="/services" class="btn btn-outline-light px-5 mt-5">
            @if (App::getLocale() == 'cn')
            了解更多
            @else
            More
            @endif
          </a>
        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featureArea page ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="unitTitle">
                        <small>Why company</small>
            @if (App::getLocale() == 'cn')
                        <span>為什麼選擇我們？</span>
            @else
                        <span>Why Choice Us？</span>
            @endif
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-lg-2 row-cols-1 g-4">
                <!-- item -->
                <div class="col featureItem">
                    <div class="Txt">
                        <small>01</small>
                        <h4 class="titleBox">
{{ __("index.exp") }}
                        </h4>
                        <div class="text">
                            <p>{{ __("index.txt1") }}</p>
                        </div>
                    </div>
                    <div class="Img">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(/images/home/feature-img-1.jpg);"></div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col featureItem">
                    <div class="Txt">
                        <small>02</small>
                        <h4 class="titleBox">
                            {{ __("index.perf") }}
                        </h4>
                        <div class="text">
                            <p>{{ __("index.perf1") }}</p>
                        </div>
                    </div>
                    <div class="Img">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(/images/home/feature-img-2.jpg);"></div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col featureItem">
                    <div class="Txt">
                        <small>03</small>
                        <h4 class="titleBox">
                            {{ __("index.create1") }}
                        </h4>
                        <div class="text">
                            <p>
                            {{ __("index.create2") }}

                            </p>
                        </div>
                    </div>
                    <div class="Img">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(/images/home/feature-img-3.jpg);"></div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col featureItem">
                    <div class="Txt">
                        <small>04</small>
                        <h4 class="titleBox">
                            {{ __("index.c1") }}
                        </h4>
                        <div class="text">
                            <p>{{ __("index.c2") }}
                            </p>
                        </div>
                    </div>
                    <div class="Img">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(/images/home/feature-img-4.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endsection
