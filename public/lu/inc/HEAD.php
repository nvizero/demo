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
    <link rel="stylesheet" href="css/page.css">

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