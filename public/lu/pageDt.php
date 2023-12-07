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
                            <a href="pageList.php" class="uk-text-subtitle">{分類文章列標題}</a>
                        </li>
                        <li class="sideInner">
                            <a href="pageList.php" class="uk-text-subtitle">{分類文章列標題}</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li><a href="pageCate.php">{分類文章標題}</a></li>
                        <li><a href="pageCateB.php">{分類文章標題(一)</a></li>
                        <li><a href="pageList.php">{分類文章列表標題}</a></li>
                        <li class="active">{分類文章詳細頁標題}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {分類文章詳細頁標題}
                    </h1>
                </div>

                <div class='uk-text-container'>
                    <img src='images/sampleCategory/uk-text-containerImg.jpg' />
                    {圖文編輯器}

                </div>

                <nav aria-label="navigation" class="navigation">
                    <ul class="pagination">
                        <li><a href="#">上一頁</a></li>
                        <li><a href="#">下一頁</a></li>
                    </ul>
                </nav>
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
                <div class="hashTagGroup">
                    <a href="hashTagResult.php">#{hashTag}</a>
                    <a href="hashTagResult.php">#{hashTag}</a>
                    <a href="hashTagResult.php">#{hashTag}</a>
                    <a href="hashTagResult.php">#{hashTag}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<?php include("inc/FOOT.php"); ?>