<?php include("inc/HEAD.php"); ?>
<!-- 內容_start -->
<!-- page_banner_start -->
<section class="uk-banner-container">
    <div class="">
        <div class="owl-carousel owl-theme">
            <!-- banner_item_start -->
            <div class="item">
                <div class="banner-item">
                    <div class="bannerImg">
                        <a href="#" class="img-content img-banner">
                            <img src="images/banner/81438612_p0.png" alt="" title="" />
                        </a>
                    </div>
                    <div class="banner-text">
                        <p class='text-title'>{Title}
                        </p>
                        <p class='uk-text-subtitle'>{Subtitle}
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
                        <li class="sideInner active">
                            <span class="uk-text-subtitle">{常見問題}</span>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li class="active">{常見問題}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {常見問題}
                    </h1>
                </div>
                <div class="collapseContent">
                    <!-- faq_item_start -->
                    <div class="card">
                        <div class="card-header" id="heading01">
                            <h2 class="mb-0">
                                <button type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                    <span>Ｑ：</span>{主標題}
                                </button>
                            </h2>
                        </div>
                        <div id="collapse01" class="collapse show" aria-labelledby="heading01" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class='uk-text-container'>
                                    <p>Ａ：{圖文編輯器}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- faq_item_end -->
                    <!-- faq_item_start -->
                    <div class="card">
                        <div class="card-header" id="heading02">
                            <h2 class="mb-0">
                                <button type="button" data-toggle="collapse" data-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    <span>Ｑ：</span>{主標題}
                                </button>
                            </h2>
                        </div>
                        <div id="collapse02" class="collapse" aria-labelledby="heading02" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class='uk-text-container'>
                                    <img src='images/sampleCategory/uk-text-containerImg.jpg' />
                                    <p>Ａ：{圖文編輯器}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- faq_item_end -->
                </div>
                <!-- 分頁 -->
                <nav aria-label="navigation" class="navigation">
                    <ul class="pagination">
                        <li><a href="#">上一頁</a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">下一頁</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<?php include("inc/FOOT.php"); ?>