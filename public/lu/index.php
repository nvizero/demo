<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{company name}</title>
    <!-- 頁簽顯示LOGO -->
    <link rel="shortcut icon" href="images/ico_logo.ico">
    <!-- (Bootstrap) Latest compiled and minified CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- bootstrap-material-design -->
    <link rel="stylesheet" href="node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <!-- Aos -->
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <!-- lity -->
    <link rel="stylesheet" href="node_modules/lity/dist/lity.min.css">
    <!-- material-icons -->
    <link rel="stylesheet" href="node_modules/material-icons/iconfont/material-icons.css">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/barba.js@2.9.10/dist/barba.min.css"> -->
    <!-- jQuery Core 3.1.0 -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- 自定義Css_start-->
    <style>
        :root {
            /* 主色 */
            --primary-color-100: #ff9900;
            --primary-color-75: #ffcc00;
            /* 輔色 */
            --secondary-color: #006745;
            /* 白 */
            --white-color-100: #fff;
            --white-color-75: #f8f8f8;
            --white-color-50: #f3f3f3;
            /* 黑 */
            --black-color-100: #000;
            --black-color-75: #030303;
            --black-color-50: #333;
            /* 灰階 */
            --gray-color-100: #aaa;
            --gray-color-50: #eee;
            --gray-color-75: #efefef;
        }
    </style>
    <!-- 標籤樣式 -->
    <link rel="stylesheet" href="css/global.css">
    <!-- 模組樣式 -->
    <link rel="stylesheet" href="css/moudle.css">
    <!-- 全局樣式 -->
    <link rel="stylesheet" href="css/layout.css">
    <!-- 模組樣式_待優化 -->
    <link rel="stylesheet" href="css/module.css">
    <!-- 主題樣式_待優化 -->
    <link rel="stylesheet" href="css/theme.css">
    <!-- 專案客製樣式 -->
    <link rel="stylesheet" href="css/style.css">
    <!-- 首頁樣式-->
    <link rel="stylesheet" href="css/index.css">

</head>


<body data-barba="wrapper">
    <!-- <ul class='transition'>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul> -->
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay container-fluid p-0">
        <!-- logo/登入/註冊/詢價車/語系/搜尋_start-->
        <div class="uk-top-container d-none">
            <div class="container-fulid">
                <!-- 登入/註冊/詢價車/語系/搜尋 -->
                <ul class="d-flex align-items-center justify-content-end">
                    <li><a href="login.php" class="icon-button-login">登入</a></li>
                    <li><a href="javascript:void(0);" class="icon-button-logout">登出</a></li>
                    <li><a href="#" class="icon-button-register">註冊</a></li>
                    <li><a href="javascript:void(0);" class="icon-button-inquiry">詢價車</a></li>
                </ul>
            </div>
        </div>
        <!-- logo/登入/註冊/詢價車/語系/搜尋_end-->
        <!-- 手機選單_start -->
        <header class="bmd-layout-header d-md-none d-block animate">
            <div class="bg-faded">
                <div class="row row-margin">
                    <div class="col-9 col-padding">
                        <div class="uk-logo">
                            <a href="index.php" class="img-content img-logo"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-3 col-padding">
                        <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s2">
                            <span class="uk-menu-btn"></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div id="dw-s2" class="bmd-layout-drawer bg-faded mbMenu">
            <div id="leftMenu">
                <div class="mbClose">
                    <button type="button" class="mbCloseBtn"><span class="material-icons">close</span></button>
                </div>
                <!-- <div id="mbSearch">
                    <form>
                        <div class='searchContent'>
                            <div class='searchContentInner'><input type='text' class='form-control' placeholder='請輸入關鍵字'></div>
                            <div class='searchContentInner searchBlock'><button type='submit' class='searchBtn'></button></div>
                        </div>
                    </form>
                </div> -->
                <ul class="nav sb-menu nav-list"></ul>
            </div>
        </div>
        <!-- 手機選單_end -->
        <main class="bmd-layout-content mainContainer">
            <!-- 主選單_start -->
            <header class="uk-header-container d-md-block d-none">
                <div class="container-fluid p-0">
                    <div class="row row-margin align-items-center">
                        <div class="col-md-2 col-padding">
                            <div class="uk-logo">
                                <h1>
                                    <!-- <a href="index.php"><img src="images/company-logo.png" alt=""></a> -->
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-10 col-padding">
                            <nav>
                                <ul id="mainMenu" itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="uk-main-nav d-flex justify-content-end align-items-center">

                                    <li itemprop="name">
                                        <a itemprop="url" href="aboutUs.php" class="arrowDown">關於我們</a>
                                        <ul class="dropdownMenu">
                                            <li><a href="javascript:void(0);">青年壯遊點</a></li>
                                            <li><a href="javascript:void(0);">尋找感動地圖</a></li>
                                            <li><a href="javascript:void(0);">青年體驗學習計畫</a></li>
                                            <li><a href="javascript:void(0);">體驗足跡</a></li>
                                        </ul>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="product.php" class="arrowDown">產品目錄</a>
                                        <ul class="dropdownMenu">
                                            <li><a href="javascript:void(0);">產品分類(一)</a></li>
                                            <li><a href="javascript:void(0);">產品分類(二)</a></li>
                                        </ul>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">活動報名</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="newsList.php">最新消息</a>
                                    </li>
                                    <!-- <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">分類文章</a>
                                    </li> -->
                                    <!-- <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">影音專區</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">下載專區</a>
                                    </li> -->
                                    <li itemprop="name">
                                        <a itemprop="url" href="contact.php">連路我們</a>
                                    </li>
                                    <li class='lang-btn liner-button'>
                                        <a itemprop="url" href="javascript:void(0);" class='after-none'>En</a>
                                    </li>
                                    <li class='lang-btn liner-button'>
                                        <a itemprop="url" href="javascript:void(0);" class='after-none'>Tw</a>
                                    </li>
                                    <li>
                                        <div class="">
                                            <form>
                                                <div class='searchContent'>
                                                    <div class="row row-margin">
                                                        <div class="col-md-9 col-padding">
                                                            <input type='text' class='form-control' placeholder='請輸入關鍵字'>
                                                        </div>
                                                        <!-- <div class="col-md-3 col-padding">
                                                            <button type='submit' class='searchBtn'></button>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- 主選單_end -->
            <!-- 內容_start -->
            <!-- index_banner_start -->
            <section class="uk-banner-container p-0">
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <!-- banner_item_start -->
                        <div class="item">
                            <div class="row row-margin align-items-center">
                                <div class="col-md-5 col-padding">
                                    <a href="#" class="img-content img-5by7">
                                        <img src="images/82887113_p0.png" alt="" title="" />
                                    </a>
                                </div>
                                <div class="col-md-7 col-padding">
                                    <div class="uk-content-subtitle text-left">
                                        <h3>
                                            Hot Product
                                        </h3>
                                    </div>
                                    <div class="uk-content-title text-left">
                                        <h2>橫幅標題</h2>
                                    </div>
                                    <article class='text-container mb-4 bg-light'>
                                        {圖文編輯器-Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}
                                    </article>
                                    <div class="liner-button">
                                        <a href="product.php">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner_item_end -->
                        <!-- banner_item_start -->
                        <div class="item">
                            <div class="row row-margin align-items-center">
                                <div class="col-md-5 col-padding">
                                    <a href="#" class="img-content img-5by7">
                                        <img src="images/75807939_p0 (1).png" alt="" title="" />
                                    </a>
                                </div>
                                <div class="col-md-7 col-padding">
                                    <div class="uk-content-subtitle text-left">
                                        <h3>
                                            Hot Product
                                        </h3>
                                    </div>
                                    <div class="uk-content-title text-left">
                                        <h2>橫幅標題</h2>
                                    </div>
                                    <article class='text-container mb-4 bg-light'>
                                        {圖文編輯器-Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}
                                    </article>
                                    <div class="liner-button">
                                        <a href="product.php">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <!-- item_start -->
                                <div class="item">
                                    <!-- item-main_start -->
                                    <div class="uk-card-liner">
                                        <div class="uk-card-item">
                                            <div class="uk-card-header">
                                                <a href="productCate.php" class='img-content img-4by3'><img src="images/sampleCategory/nike.jpg" /></a>
                                            </div>
                                            <div class="uk-card-body">
                                                <a href="productCate.php" class="text-title">{NIKE}</a><br />
                                                <a href="productCate.php" class="uk-text-subtitle">{產品分類副標題}</a>
                                            </div>
                                            <div class="uk-card-footer">
                                                <a href="productCate.php" class='ell-text'>{Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-main_end -->
                                </div>
                                <!-- item_end -->
                                <!-- item_start -->
                                <div class="item">
                                    <!-- item-main_start -->
                                    <div class="uk-card-liner">
                                        <div class="uk-card-item">
                                            <div class="uk-card-header">
                                                <a href="productCate.php" class='img-content img-4by3'><img src="images/sampleCategory/nike.jpg" /></a>
                                            </div>
                                            <div class="uk-card-body">
                                                <a href="productCate.php" class="text-title">{NIKE}</a><br />
                                                <a href="productCate.php" class="uk-text-subtitle">{產品分類副標題}</a>
                                            </div>
                                            <div class="uk-card-footer">
                                                <a href="productCate.php" class='ell-text'>{Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-main_end -->
                                </div>
                                <!-- item_end -->
                                <!-- item_start -->
                                <div class="item">
                                    <!-- item-main_start -->
                                    <div class="uk-card-liner">
                                        <div class="uk-card-item">
                                            <div class="uk-card-header">
                                                <a href="productCate.php" class='img-content img-4by3'><img src="images/sampleCategory/nike.jpg" /></a>
                                            </div>
                                            <div class="uk-card-body">
                                                <a href="productCate.php" class="text-title">{NIKE}</a><br />
                                                <a href="productCate.php" class="uk-text-subtitle">{產品分類副標題}</a>
                                            </div>
                                            <div class="uk-card-footer">
                                                <a href="productCate.php" class='ell-text'>{Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-main_end -->
                                </div>
                                <!-- item_end -->
                                <!-- item_start -->
                                <div class="item">
                                    <!-- item-main_start -->
                                    <div class="uk-card-liner">
                                        <div class="uk-card-item">
                                            <div class="uk-card-header">
                                                <a href="productCate.php" class='img-content img-4by3'><img src="images/sampleCategory/nike.jpg" /></a>
                                            </div>
                                            <div class="uk-card-body">
                                                <a href="productCate.php" class="text-title">{NIKE}</a><br />
                                                <a href="productCate.php" class="uk-text-subtitle">{產品分類副標題}</a>
                                            </div>
                                            <div class="uk-card-footer">
                                                <a href="productCate.php" class='ell-text'>{Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item-main_end -->
                                </div>
                                <!-- item_end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- index_product_owl_end -->
            <section class='bg-light'>
                <div class="container">
                    <div class="uk-content-subtitle">
                        <h3>
                            About Us
                        </h3>
                    </div>
                    <div class="uk-content-title mb-1 after-none">
                        <h2>圖文編輯器標題</h2>
                    </div>
                    <article class='text-container mb-0 bg-white col-padding'>
                        {圖文編輯器}
                    </article>
                </div>
            </section>
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
                        <div class="col-lg-3 col-md-3 col-sm-6 col-padding">
                            <!-- item-main_start -->
                            <div class="uk-card-item">
                                <div class="uk-card-header">
                                    <a href="productCate.php" class='img-content img-1by1'><img src="images/sampleCategory/product04-02.jpg" /></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="productCate.php" class='text-primary'>N-001</a><br />
                                    <a href="productCate.php" class="text-title">{NIKE}</a><br />
                                    <a href="productCate.php" class="uk-text-subtitle">{產品分類副標題}</a>
                                </div>
                                <div class="uk-card-footer">
                                    <a href="productCate.php" class='ell-text'>{Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a creative and diverse global team and by making a positive impact in communities where we live and work. Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.}</a>
                                </div>
                            </div>
                            <!-- item-main_end -->
                        </div>
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
                        <div class="col-lg-4 col-md-4 col-sm-6 col-padding">
                            <!-- item-main_start -->
                            <div class="uk-card-liner">
                                <div class="uk-card-item">
                                    <div class="uk-card-header">
                                        <a href="productCate.php" class='img-content img-10by3'><img src="images/banner/81438612_p0.png" /></a>
                                    </div>
                                    <div class="uk-card-body">
                                        <a href="productCate.php" class='text-primary'>2023-0501</a><br />
                                        <a href="productCate.php" class="text-title">{最新消息標題}</a><br />
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="productCate.php" class='ell-text'>{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item-main_end -->
                        </div>
                        <!-- product_item_end -->
                        <!-- product_item_start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-padding">
                            <!-- item-main_start -->
                            <div class="uk-card-liner">
                                <div class="uk-card-item">
                                    <div class="uk-card-header">
                                        <a href="productCate.php" class='img-content img-10by3'><img src="images/banner/81438612_p0.png" /></a>
                                    </div>
                                    <div class="uk-card-body">
                                        <a href="productCate.php" class='text-primary'>2023-0501</a><br />
                                        <a href="productCate.php" class="text-title">{最新消息標題}</a><br />
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="productCate.php" class='ell-text'>{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item-main_end -->
                        </div>
                        <!-- product_item_end -->
                        <!-- product_item_start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-padding">
                            <!-- item-main_start -->
                            <div class="uk-card-liner">
                                <div class="uk-card-item">
                                    <div class="uk-card-header">
                                        <a href="productCate.php" class='img-content img-10by3'><img src="images/banner/81438612_p0.png" /></a>
                                    </div>
                                    <div class="uk-card-body">
                                        <a href="productCate.php" class='text-primary'>2023-0501</a><br />
                                        <a href="productCate.php" class="text-title">{最新消息標題}</a><br />
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="productCate.php" class='ell-text'>{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item-main_end -->
                        </div>
                        <!-- product_item_end -->
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
            <!-- index_html_editor_end -->
            <!-- 內容_end -->
            <!-- 頁尾_start -->
            <footer>
                <div class="container">
                    <div class="row row-margin">
                        <div class="col-md-4 col-padding">
                            <p class='text-title'>
                                {}
                            </p>
                            <address class="mb-0 company-info">
                                <ul>
                                    <li>
                                        <p class='mb-0'>地址：{}</p>
                                    </li>
                                    <li>
                                        <p class='mb-0'>電話：<a href="">{}</a></p>
                                    </li>
                                    <li>
                                        <p class='mb-0'>傳真：{}</p>
                                    </li>
                                    <li>
                                        <p class='mb-0'>信箱：<a href="">{}</a></p>
                                    </li>
                                    <li>
                                        <a href="" class='contact-button'>Contact</a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                        <div class="col-md-8 col-padding">
                            <p class='text-title'>
                                About Us
                            </p>
                            <nav>
                                <div class="row row-margin">
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">公司簡介</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">最新消息</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">知識文章</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">產品目錄</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">影音專區</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">下載專區</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">型錄瀏覽</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">人才招募</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">常見問題</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">隱私權專區</a></div>
                                    <!-- nav_item_start -->
                                    <div class="col-md-3 col-padding"><a href="aboutUs.php">服務條款</a></div>
                                </div>
                            </nav>
                            <ul class='d-flex socialmedia-container align-items-center'>
                                <li class='text-title'>Social media：</li>
                                <!-- item_start -->
                                <li>
                                    <a href="#" class="img-content img-icon">
                                        <img src="images/socialmedia/youtube.png" />
                                    </a>
                                </li>
                                <!-- item_start -->
                                <li>
                                    <a href="#" class="img-content img-icon">
                                        <img src="images/socialmedia/ig.png" />
                                    </a>
                                </li>
                                <!-- item_start -->
                                <li>
                                    <a href="#" class="img-content img-icon">
                                        <img src="images/socialmedia/line.png" />
                                    </a>
                                </li>
                                <!-- item_start -->
                                <li>
                                    <a href="#" class="img-content img-icon">
                                        <img src="images/socialmedia/facebook.png" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- 版權宣告 -->
            <div class="copyright">
                <div class="container">
                    <p class='mb-0'>
                         / Designed by <a href=""></a>
                    </p>
                </div>
            </div>
            <!-- 版權宣告/政策/網站地圖_end -->
            <!-- 頁尾_end -->
            <!-- 常駐項_start -->
            <aside class="float-menu-container">
                <ul>
                    <li>
                        <a href="tel:">
                            <span class="material-icons">call</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:">
                            <span class="material-icons">email</span>
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <span class="material-icons">contact_page</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="goTop">
                            <span class="material-icons">keyboard_arrow_up</span>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- 常駐項_end -->
        </main>
    </div>
    <!-- (Bootstrap) Latest compiled and minified JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.min.js"></script>
    <!-- owl_carousel -->
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- Aos -->
    <script src="node_modules/aos/dist/aos.js"></script>
    <!-- lity -->
    <script src="node_modules/lity/dist/lity.min.js"></script>

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <!-- <script>
        $(function() {
            gsap.to(
                'ul.transition li', {
                    scaleY: 1, // 垂直缩放，从 0 变为 1，产生放大效果
                    duration: .5,
                    stagger: .2, // 每个 li 元素之间的延迟
                    transformOrigin: 'bottom left', // 缩放的基准点
                    onComplete: () => {
                        // 第一个动画完成后的回调函数

                        // 使用 GSAP 创建淡出动画
                        gsap.to('ul.transition li', {
                            duration: .5,
                            scaleY: 0, // 垂直缩放，从 1 变为 0，产生收缩效果
                            transformOrigin: 'bottom left',
                            stagger: .1,
                            delay: .1, // 延迟一段时间后开始淡出动画
                            opacity: 0, // 设置透明度为 0，实现淡出效果
                            onComplete: () => {
                                console.log('end'); // 所有动画完成后的回调函数
                            }
                        });
                    }
                }
            );
        });
    </script> -->

    <!-- 自定義js -->
    <script src="js/script.js"></script>
</body>

</html>
