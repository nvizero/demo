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
    <link rel="stylesheet" href="node_modules/mdb-ui-kit/css/mdb.min.css">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- jQuery Core 3.1.0 -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- 自定義Css_start-->

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/moudle.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay container-fluid p-0">
        <!-- logo/登入/註冊/詢價車/語系/搜尋_start-->
        <div class="uk-top-container d-none">
            <div class="container">
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
            <header class="uk-header-container d-none">
                <div class="container">
                    <div class="row row-margin align-items-center">
                        <div class="col-md-3 col-padding">
                            <div class="uk-logo">
                                <h1>
                                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-9 col-padding">
                            <nav>
                                <ul id="mainMenu" itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="uk-main-nav d-flex justify-content-end">
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">回首頁</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);" class="arrowDown">關於我們</a>
                                        <!-- 客製功能_start -->
                                        <ul class="dropdownMenu">
                                            <li><a href="javascript:void(0);">青年壯遊點</a></li>
                                            <li><a href="javascript:void(0);">尋找感動地圖</a></li>
                                            <li><a href="javascript:void(0);">青年體驗學習計畫</a></li>
                                            <li><a href="javascript:void(0);">體驗足跡</a></li>
                                        </ul>
                                        <!-- 客製功能_end -->
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">活動報名</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">最新消息</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">資源補給站</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">影音專區</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">下載專區</a>
                                    </li>
                                    <li itemprop="name">
                                        <a itemprop="url" href="javascript:void(0);">網站導覽</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- 主選單_end -->
            <!-- 內容_start -->
            <div class="main-member-container">
                <div class="member-side-container d-md-block d-none bg-dark">
                    <div class="uk-logo">
                        <h1>
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </h1>
                    </div>
                    <aside class="side-container">
                        <ul>
                            <li><a href="member-coupon-list.php">我的優惠券</a></li>
                            <li><a href="member-view-list.php">瀏覽紀錄</a></li>
                            <li><a href="member-collect-list.php">收藏清單</a></li>
                            <li><a href="member-inquiry-list.php">活動紀錄</a></li>
                            <li><a href="member-recommend-list.php">推薦列表</a></li>
                            <li><a href="member-setting.php">基本設定</a></li>
                        </ul>
                    </aside>
                </div>