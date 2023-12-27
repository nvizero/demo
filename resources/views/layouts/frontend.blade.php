<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <!-- 頁簽顯示LOGO -->
    <link rel="shortcut icon" href="/lu/images/ico_logo.ico">
    <!-- (Bootstrap) Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/lu/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- bootstrap-material-design -->
    <link rel="stylesheet" href="/lu/node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="/lu/node_modules/animate.css/animate.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="/lu/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/lu/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <!-- Aos -->
    <link rel="stylesheet" href="/lu/node_modules/aos/dist/aos.css">
    <!-- lity -->
    <link rel="stylesheet" href="/lu/node_modules/lity/dist/lity.min.css">
    <!-- material-icons -->
    <link rel="stylesheet" href="/lu/node_modules/material-icons/iconfont/material-icons.css">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/barba.js@2.9.10/dist/barba.min.css"> -->
    <!-- jQuery Core 3.1.0 -->
    <script src="/lu/node_modules/jquery/dist/jquery.min.js"></script>
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
    <link rel="stylesheet" href="/lu/css/global.css">
    <!-- 模組樣式 -->
    <link rel="stylesheet" href="/lu/css/moudle.css">
    <!-- 全局樣式 -->
    <link rel="stylesheet" href="/lu/css/layout.css">
  
    <!-- 專案客製樣式 -->
    <link rel="stylesheet" href="/lu/css/style.css">
    <!-- 首頁樣式-->
    <link rel="stylesheet" href="/lu/css/index.css">

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
                            <a href="index.php" class="img-content img-logo"><img src="/lu/images/logo.png" alt=""></a>
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
                                    <!-- <a href="index.php"><img src="/lu/images/company-logo.png" alt=""></a> -->
                                </h1>
                            </div>
                        </div>
                         @include("frontend.common.navbar")
                    </div>
                </div>
            </header>
            <!-- 主選單_end -->
            <!-- 內容_start -->
            <!-- index_banner_start -->
            @yield('content')
            <!-- index_html_editor_end -->
            <!-- 內容_end -->
            <!-- 頁尾_start -->
             @include('frontend.common.footer')
            <!-- 常駐項_end -->
        </main>
    </div>
    @yield('modal')
    <!-- (Bootstrap) Latest compiled and minified JavaScript -->
    <script src="/lu/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/lu/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="/lu/node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.min.js"></script>
    <!-- owl_carousel -->
    <script src="/lu/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- Aos -->
    <script src="/lu/node_modules/aos/dist/aos.js"></script>
    <!-- lity -->
    <script src="/lu/node_modules/lity/dist/lity.min.js"></script>

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    

    <!-- 自定義js -->
    <script src="/lu/js/script.js"></script>
</body>

</html>
