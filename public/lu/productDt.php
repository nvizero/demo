<?php include("inc/HEAD.php"); ?>
<!-- 內容_start -->
<!-- page_banner_start -->
<section class="uk-banner-container p-0">
    <div class="owl-carousel owl-theme">
        <!-- banner_item_start -->
        <div class="item">
            <div class="banner-item">
                <div class="bannerImg">
                    <a href="#" class="img-content img-banner">
                        <img src="images/banner/81438612_p0.png" alt="" title="" />
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
                        <li class="sideInner">
                            <span class="uk-text-subtitle active">{產品第三層}</span>
                        </li>
                        <li class="sideInner">
                            <a href="productList.php" class="uk-text-subtitle">{產品第三層}</a>
                        </li>
                        <li class="sideInner">
                            <a href="productList.php" class="uk-text-subtitle">{產品第三層}</a>
                        </li>
                        <li class="sideInner">
                            <a href="productList.php" class="uk-text-subtitle">{產品第三層}</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-sm-12 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li><a href="product.php">{產品目錄}</a></li>
                        <li><a href="productCate.php">{產品分類第一層}</a></li>
                        <li><a href="productCateB.php">{產品分類第二層}</a></li>
                        <li><a href="productCateB.php">{產品分類第三層}</a></li>
                        <li class="active">{產品詳細}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <!-- 產品圖片瀏覽+產品介紹_start -->
                <div class="row row-margin">
                    <div class="row row-margin">
                        <div class="col-md-4 col-padding">
                            <div class="big-image">
                                <div class="owl-carousel owl-theme">
                                    <div class="item" data-hash="pt_01">
                                        <a href="javascript:void(0);" class="img-content img-1by1">
                                            <img src="images/sampleCategory/product04.jpg" title="" alt='' />
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pt_02">
                                        <a href="javascript:void(0);" class="img-content img-1by1">
                                            <img src="images/sampleCategory/product04-01.jpg" title="" alt='' />
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pt_03">
                                        <a href="javascript:void(0);" class="img-content img-1by1">
                                            <img src="images/sampleCategory/product04-02.jpg" title="" alt='' />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="img-control">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <a class="img-content img-1by1 button secondary url active" href="#pt_01">
                                            <img src="images/sampleCategory/product04.jpg" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="img-content img-1by1 button secondary url" href="#pt_02">
                                            <img src="images/sampleCategory/product04-01.jpg" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="img-content img-1by1 button secondary url" href="#pt_03">
                                            <img src="images/sampleCategory/product04-02.jpg" alt="" title="">
                                        </a>
                                    </div>
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
                                    001
                                </h2>
                            </div>
                            <div class="uk-content-title">
                                <h1>
                                    {產品詳細頁}
                                </h1>
                            </div>
                            <article class='text-container mb-4 bg-light'>
                                {圖文編輯器-Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}
                            </article>
                            <!-- hashTag _start -->
                            <div class="hashTagGroup">
                                <a href="hashTagResult.php">#{hashTag}</a>
                                <a href="hashTagResult.php">#{hashTag}</a>
                                <a href="hashTagResult.php">#{hashTag}</a>
                                <a href="hashTagResult.php">#{hashTag}</a>
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
<?php include("inc/FOOT.php"); ?>