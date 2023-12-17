@extends('layouts.frontend')

@section('title','Test')
    

@section('content')
<section class="uk-banner-container p-0">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <!-- banner_item_start -->
            @foreach($index_shows as $show)
            <div class="item">
                <div class="row row-margin align-items-center">
                    <div class="col-md-5 col-padding">
                        <a href="#" class="img-content img-5by7">
                            <img src="/storage/{{$show->img}}" alt="" title="" />
                        </a>
                    </div>
                    <div class="col-md-7 col-padding">
                        <div class="uk-content-subtitle text-left">
                            <h3>{{$show->hot}}
                            </h3>
                        </div>
                        <div class="uk-content-title text-left">
                            <h2>{{$show->title}}</h2>
                        </div>
                        <article class='text-container mb-4 bg-light'>
                            {!!$show->content!!}
                        </article>
                        <div class="liner-button">
                            <a href="{{$show->link}}">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- banner_item_end -->
        </div>
    </div>
</section>
<!-- index_banner_end -->
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
                  @foreach($products  as $prod)
                    <!-- item_start -->
                    <div class="item">
                        <!-- item-main_start -->
                        <div class="uk-card-liner">
                            <div class="uk-card-item">
                                <div class="uk-card-header">
                                    <a href="productCate.php" class='img-content img-4by3'><img src="/storage/{{$prod->imgs}}" /></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="productCate.php" class="text-title">{{$prod->title}}</a><br />
                                    <a href="productCate.php" class="uk-text-subtitle">{{$prod->category->title}}</a>
                                </div>
                                <div class="uk-card-footer">
                                    <a href="productCate.php" class='ell-text'>{!! $prod->content!!}</a>
                                </div>
                            </div>
                        </div>
                        <!-- item-main_end -->
                    </div>
                  @endforeach
                    <!-- item_start -->
                    <!-- item_end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- index_product_owl_end -->
@if(isset($index_about[0]))
<section class='bg-light'>
    <div class="container">
        <div class="uk-content-subtitle">
            <h3>
                About Us
            </h3>
        </div>
        <div class="uk-content-title mb-1 after-none">
            <h2>{{$index_about[0]->title}}</h2>
        </div>
        <article class='text-container mb-0 bg-white col-padding'>
            {!!$index_about[0]->content!!}
        </article>
    </div>
</section>
@endif
<!-- index_product_start -->
<section class="product-container">
    <div class="container">
        <div class="row row-margin align-items-center mb-2">
            <div class="col-md-10 col-padding">
                <div class="uk-content-subtitle">
                    <h3>
                        Hot Product
                    </h3>
                </div>
                <div class="uk-content-title p-0 m-0 after-none">
                    <h2>熱門產品</h2>
                </div>
            </div>
            <div class="col-md-2 col-padding">
                <div class="liner-button w-100">
                    <a href="product.php">View More</a>
                </div>
            </div>
        </div>
        <article class='text-container bg-light mb-4'>
            {圖文編輯器}
        </article>
        <div class="row row-margin row-high">
            <!-- product_item_start -->
            @foreach($hots as $hot)
            <div class="col-lg-3 col-md-3 col-sm-6 col-padding">
                <!-- item-main_start -->
                <div class="uk-card-item">
                    <div class="uk-card-header">
                        <a href="productCate.php" class='img-content img-1by1'><img src="/storage/{{$hot->imgs}}" /></a>
                    </div>
                    <div class="uk-card-body">
                        <a href="productCate.php" class='text-primary'>{{$hot->serial}}</a><br />
                        <a href="productCate.php" class="text-title">{{$hot->title}}</a><br />
                        <a href="productCate.php" class="uk-text-subtitle">{{$hot->category->title}}</a>
                    </div>
                    <div class="uk-card-footer">
                        <a href="productCate.php" class='ell-text'>{!! $prod->content!!}</a>
                    </div>
                </div>
                <!-- item-main_end -->
            </div>
            @endforeach
            <!-- product_item_end -->
        </div>
    </div>
</section>
<!-- index_product_owl_end -->

<!-- index_news_start -->
<section class="uk-news-container">
    <div class="container">
        <div class="row row-margin align-items-center mb-2">
            <div class="col-md-10 col-padding">
                <div class="uk-content-subtitle">
                    <h3>
                        News & Evant
                    </h3>
                </div>
                <div class="uk-content-title p-0 m-0 after-none">
                    <h2>最新消息</h2>
                </div>
            </div>
            <div class="col-md-2 col-padding">
                <div class="liner-button w-100">
                    <a href="product.php">View More</a>
                </div>
            </div>
        </div>
        <div class="row row-margin row-high">
            <!-- product_item_start -->
            @foreach($news as $new)
            <div class="col-lg-4 col-md-4 col-sm-6 col-padding">
                <!-- item-main_start -->
                <div class="uk-card-liner">
                    <div class="uk-card-item">
                        <div class="uk-card-header">
                            <a href="productCate.php" class='img-content img-10by3'><img src="/storage/{{$new->img}}" /></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="productCate.php" class='text-primary'>{{$new->created_at}}</a><br />
                            <a href="productCate.php" class="text-title">{{$new->title}}</a><br />
                        </div>
                        <div class="uk-card-footer">
                            <a href="productCate.php" class='ell-text'>{!! $new->content!!}</a>
                        </div>
                    </div>
                </div>
                <!-- item-main_end -->
            </div>
            @endforeach
            <!-- product_item_end -->
            <!-- product_item_start -->
        </div>
    </div>
</section>
<!-- index_news_end -->
<!-- index_html_editor_start -->
<section class="index-editor-container d-none">
    <div class="container">
        <div class="uk-content-title">
            <h2>
                {頁尾圖文編輯器標題}
            </h2>
        </div>
        <div class="uk-text-container">

        </div>
    </div>
</section>
@endsection
