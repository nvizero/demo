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
                <div class="row row-margin">
                    <div class="col-md-2 col-padding d-md-block d-none bg-dark">
                        <div class="member-side-container">
                            <div class="uk-logo">
                                <h1>
                                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                                </h1>
                            </div>
                            <aside class="side-container">
                                <ul>
                                    <li><a href="coupon-list.php">我的優惠券</a></li>
                                    <li><a href="">活動紀錄</a></li>
                                    <li><a href="">推薦紀錄</a></li>
                                    <li><a href="">會員等及與權益</a></li>
                                    <li><a href="">基本設定</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                    <div class="col-md-10 col-padding">
                        <section class='member-container'>
                            <div class="member-header">
                                <div class="row row-margin align-items-center">
                                    <div class="col-md-6 col-padding">
                                        <div class="uk-content-title p-0 m-0">
                                            <h2>我的優惠券</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-padding text-right">
                                        <!-- 彈出視窗 -->
                                        <a href="product.php" class="uk-button">兌換優惠券</a>
                                    </div>
                                </div>
                                <nav>
                                    <ul class='d-flex'>
                                        <li><a href="">所有優惠券</a></li>
                                        <li><a href="">網路商店</a></li>
                                        <li><a href="">線下門市</a></li>
                                    </ul>
                                </nav>
                                <div class="row row-margin align-items-center">
                                    <div class="col-md-10 col-padding">
                                        <form>
                                            <div class='searchContent w-100'>
                                                <div class='searchContentInner'><input type='text' class='form-control' placeholder='請輸入關鍵字'></div>
                                                <div class='searchContentInner searchBlock'><button type='submit' class='searchBtn'></button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2 col-padding text-center">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class='mb-0 mr-4'>
                                                共 10 個檔案
                                            </p>
                                            <select class="form-control text-center" id="exampleFormControlSelect1">
                                                <option>時間排序高至低</option>
                                                <option>時間排序低至高</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="member-body">

                            </div>
                            <div class="member-footer">
                                <div class="row row-margin align-items-center">
                                    <div class="col-md-6 col-padding">
                                        <p class='mb-0'>
                                            顯示 100 項中的 1 ~ 10 項。
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-padding">
                                        <nav aria-label="navigation" class="navigation mt-0">
                                            <ul class="pagination justify-content-end">
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
                    </div>
                </div>
            </div>
            <!-- 內容_end -->
            <!-- 頁尾_start -->
            <footer>
                <div class="container">
                    <nav class='d-none'>
                        <ul class="uk-main-nav d-flex">
                            <li>
                                <a href="aboutUs.php">公司簡介</a>
                            </li>
                            <li>
                                <a href="newsCate.php">最新消息</a>
                            </li>
                            <li>
                                <a href="pageCate.php">公司簡介</a>
                            </li>
                            <li>
                                <a href="pageCate.php">知識文章</a>
                            </li>
                            <li>
                                <a href="product.php">產品目錄</a></a>
                            </li>
                            <li>
                                <a href="productList.php">鞋子(自定義)</a>
                            </li>
                            <li>
                                <a href="video.php">影音專區</a>
                            </li>
                            <li>
                                <a href="download.php">下載專區</a>
                            </li>
                            <li>
                                <a href="catelog.php">型錄瀏覽</a>
                            </li>
                            <li>
                                <a href="recruit.php">人才招募</a>
                            </li>
                            <li>
                                <a href="faq.php">常見問題</a>
                            </li>
                            <li>
                                <a href="contact.php">聯絡我們</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="company-info">
                        <div class="row row-margin align-items-center">
                            <div class="col-md-6 col-padding">
                                <address class="company-info mb-0">
                                    <div class="uk-content-title">
                                        <h2>
                                            {久大寰宇資訊股份有限公司}
                                        </h2>
                                    </div>
                                    <ul>
                                        <li>
                                            <p class='mb-0'>公司地址：{台北市中正區衡陽路7號10樓}</p>
                                        </li>
                                        <li>
                                            <p class='mb-0'>電話：<a href="tel:02-7713-7789">{02-7713-7789}</a></p>
                                        </li>
                                        <li>
                                            <p class='mb-0'>傳真：{02-2381-8877}</p>
                                        </li>
                                        <li>
                                            <p class='mb-0'>信箱：<a href="mailto:isb@isb.com.tw">{isb@isb.com.tw}</a></p>
                                        </li>
                                    </ul>
                                </address>
                            </div>
                            <div class="col-md-6 col-padding">
                                <div class="uk-logo">
                                    <a href="index.php" class="img-content img-logo"><img src="images/logo.png" alt=""></a>
                                </div>
                                <div class="socialmedia-container">
                                    <ul class='d-flex text-center'>
                                        <!-- item_start -->
                                        <li>
                                            <a href="#" class="img-content img-icon">
                                                <img src="images/socialmedia/youtube.svg" />
                                            </a>
                                            <a href='#' class=''>
                                                Youtube
                                            </a>
                                        </li>
                                        <!-- item_end -->
                                        <!-- item_start -->
                                        <li>
                                            <a href="#" class="img-content img-icon">
                                                <img src="images/socialmedia/line.svg" />
                                            </a>
                                            <a href='#' class=''>
                                                Line
                                            </a>
                                        </li>
                                        <!-- item_end -->
                                        <!-- item_start -->
                                        <li>
                                            <a href="#" class="img-content img-icon">
                                                <img src="images/socialmedia/twitter.svg" />
                                            </a>
                                            <a href='#' class=''>
                                                Twitter
                                            </a>
                                        </li>
                                        <!-- item_end -->
                                        <!-- item_start -->
                                        <li>
                                            <a href="#" class="img-content img-icon">
                                                <img src="images/socialmedia/facebook.svg" />
                                            </a>
                                            <a href='#' class=''>
                                                Facebook
                                            </a>
                                        </li>
                                        <!-- item_end -->
                                        <!-- item_start -->
                                        <li>
                                            <a href="#" class="img-content img-icon">
                                                <img src="images/socialmedia/wechat.svg" />
                                            </a>
                                            <a href='#' class=''>
                                                Wechat
                                            </a>
                                        </li>
                                        <!-- item_end -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- 版權宣告 -->
            <div class="copyright">
                <div class="container">
                    <p class='mb-0'>
                        Copyright @ Newoil 3.0 / Designed by <a href="http://www.isb.com.tw">iSB</a> <a href="privacy.php">隱私權政策</a> / <a href="pageDt.php">服務條款</a>
                    </p>
                </div>
            </div>
            <!-- 版權宣告/政策/網站地圖_end -->
            <!-- 頁尾_end -->
            <!-- 常駐項_start -->
            <aside class="float-menu-container">
                <ul>
                    <li>
                        <a href="tel:0277137789">
                            <span class="material-icons">call</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:isb@isb.com.tw">
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
    <!-- barba -->
    <script src="node_modules/barba.js/dist/barba.min.js"></script>
    <!-- gsap -->
    <script src="node_modules/gsap/dist/gsap.min.js"></script>
    <!-- 自定義js -->
    <script src="js/script.js"></script>
</body>

</html>