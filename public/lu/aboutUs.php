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
            <div class="col-padding col-md-3">
                <aside class="sideContnet">
                    <ul>
                        <li class="sideInner active">
                            <span class="uk-text-subtitle">{公司簡介}</span>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-padding col-md-9">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li class="active">{公司簡介}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {公司簡介}
                    </h1>
                </div>
                <div class='uk-text-container'>
                    <img src='images/sampleCategory/uk-text-containerImg.jpg' />
                    {圖文編輯器}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<?php include("inc/FOOT.php"); ?>