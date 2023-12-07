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
                            <div class="sideActive">
                                <div class="sideActiveInner">
                                    <span class='uk-text-subtitle'>{政治新聞}</span>
                                </div>
                                <div class="sideActiveInner">
                                    <a href='javascript:void(0);' class="sideBtn"></a>
                                </div>
                            </div>
                            <ul class="sideInnerMenu">
                                <li class="sideInner"><a href="newsList.php">{美國}</a></li>
                                <li class="sideInner"><a href="newsList.php">{台灣}</a></li>
                            </ul>
                        </li>
                        <li class="sideInner">
                            <a href="newsList.php" class="uk-text-subtitle">{娛樂新聞}</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9 col-padding">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li><a href="newsCate.php">{最新消息列表}</a></li>
                        <li class="active">{政治新聞}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        政治新聞
                    </h1>
                </div>
                <div class='uk-text-container'>
                    <img src='images/sampleCategory/uk-text-containerImg.jpg' />
                    <p>{圖文編輯器}</p>
                </div>
                <ul class="newsItemContent">
                    <!-- news_item_start -->
                    <li class="newsItem">
                        <div class="newsItemInner">
                            <img src="images/newImg.jpeg" />
                        </div>
                        <div class="newsItemInner">
                            <a href="newsList.php" class="text-title">{美國}</a>
                            <time class="">{2021 - 0227}</time>
                            <a href="newsList.php">{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                        </div>
                    </li>
                    <!-- news_item_end -->
                    <!-- news_item_start -->
                    <li class="newsItem">
                        <div class="newsItemInner">
                            <img src="images/newImg.jpeg" />
                        </div>
                        <div class="newsItemInner">
                            <a href="newsList.php" class="text-title">{台灣}</a>
                            <time class="">{2021 - 0227}</time>
                            <a href="newsList.php">{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                        </div>
                    </li>
                    <!-- news_item_end -->
                </ul>
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