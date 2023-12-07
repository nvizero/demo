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
                            <a href="newsList.php" class="uk-text-subtitle">{美國}</a>
                        </li>
                        <li class="sideInner">
                            <a href="newsList.php" class="uk-text-subtitle">{台灣}</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li><a href="newsCate.php">{最新消息}</a></li>
                        <li><a href="newsCate.php">{政治新聞}</a></li>
                        <li><a href="newsCateB.php">{美國}</a></li>
                        <li class="active">{川普當選(分類文章標題)}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {川普當選(分類文章標題)}
                    </h1>
                </div>
                <div class='uk-text-container'>
                    <img src='images/sampleCategory/uk-text-containerImg.jpg' />
                    {圖文編輯器-台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}
                </div>
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