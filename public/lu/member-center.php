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
        <div class="uk-top-container">
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
            <div class="main-member-container" style="border: 1px solid #f00;">
                <div class="row row-margin">
                    <div class="col-md-6 col-padding">
                        <div class="uk-content-title text-center">
                            <h2>我的優惠券</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-padding">
                        <div class="uk-content-title text-center">
                            <!-- 彈出視窗 -->
                            <a href="product.php" class="uk-button">兌換優惠券</a>
                        </div>
                    </div>
                </div>
                <div class="row row-margin" style="border:1px solid #f00">
                    <div class="col-md-2 col-padding" style="border:1px solid #f00">
                        <div class="uk-logo">
                            <h1>
                                <a href="index.php"><img src="images/logo.png" alt=""></a>
                            </h1>
                        </div>
                        <aside class="side-container">
                            <ul>
                                <li><a href="">我的優惠券</a></li>
                                <li><a href="">活動紀錄</a></li>
                                <li><a href="">推薦紀錄</a></li>
                                <li><a href="">會員等及與權益</a></li>
                                <li><a href="">基本設定</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-10 col-padding">
                        <!-- main_start -->
                        <section class='member-container'>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="" role="presentation">
                                    <button class="uk-button active" id="all-tab" data-toggle="tab" data-target="#all" type="button" role="tab" aria-controls="all-tab" aria-selected="true">全部</button>
                                </li>
                                <li class="" role="presentation">
                                    <button class="uk-button" id="tab01-tab" data-toggle="tab" data-target="#tab01" type="button" role="tab" aria-controls="tab01-tab" aria-selected="false">尚未使用</button>
                                </li>
                                <li class="" role="presentation">
                                    <button class="uk-button" id="tab02-tab" data-toggle="tab" data-target="#tab02" type="button" role="tab" aria-controls="tab02-tab" aria-selected="false">已使用</button>
                                </li>
                                <li class="" role="presentation">
                                    <button class="uk-button" id="tab03-tab" data-toggle="tab" data-target="#tab03" type="button" role="tab" aria-controls="tab03-tab" aria-selected="false">失效</button>
                                </li>
                                <li class="" role="presentation">
                                    <button class="uk-button" id="tab04-tab" data-toggle="tab" data-target="#tab04" type="button" role="tab" aria-controls="tab04-tab" aria-selected="true">本週即將到期</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">優惠序號</th>
                                                    <th scope="col">優惠券名稱</th>
                                                    <th scope="col">類型</th>
                                                    <th scope="col">內容</th>
                                                    <th scope="col">起始時間</th>
                                                    <th scope="col">結束時間</th>
                                                    <th scope="col">維護</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- item_start -->
                                                <tr>
                                                    <th scope="row">001</th>
                                                    <td>
                                                        <a href="coupon-dt.php">優惠券名稱標題內容</a><br />
                                                        <a href="coupon-dt.php">優惠券名稱副標題內容</a>
                                                    </td>
                                                    <td>
                                                        <a href="coupon-dt.php" class='text-success state-box'>尚未使用</a>
                                                    </td>
                                                    <td>
                                                        <a href="coupon-dt.php">免費</a>
                                                    </td>
                                                    <td>
                                                        <a href="coupon-dt.php">2023/07/30</a>
                                                    </td>
                                                    <td>
                                                        <a href="coupon-dt.php">2023/07/31</a>
                                                    </td>
                                                    <td>
                                                        <a href="coupon-dt.php">link</a>
                                                        <a href="">Copy</a>
                                                    </td>
                                                </tr>
                                                <!-- item_start -->
                                                <tr>
                                                    <th scope="row">001</th>
                                                    <td>
                                                        <a href="">優惠券名稱標題內容</a><br />
                                                        <a href="">優惠券名稱副標題內容</a>
                                                    </td>
                                                    <td>
                                                        <a href="" class='text-success state-box'>尚未使用</a>
                                                    </td>
                                                    <td>
                                                        <a href="">免費</a>
                                                    </td>
                                                    <td>
                                                        <a href="">2023/07/30</a>
                                                    </td>
                                                    <td>
                                                        <a href="">2023/07/31</a>
                                                    </td>
                                                    <td>
                                                        <a href="">link</a>
                                                        <a href="">Copy</a>
                                                    </td>
                                                </tr>
                                                <!-- item_start -->
                                                <tr>
                                                    <th scope="row">001</th>
                                                    <td>
                                                        <a href="">優惠券名稱標題內容</a><br />
                                                        <a href="">優惠券名稱副標題內容</a>
                                                    </td>
                                                    <td>
                                                        <a href="" class='text-success state-box'>尚未使用</a>
                                                    </td>
                                                    <td>
                                                        <a href="">免費</a>
                                                    </td>
                                                    <td>
                                                        <a href="">2023/07/30</a>
                                                    </td>
                                                    <td>
                                                        <a href="">2023/07/31</a>
                                                    </td>
                                                    <td>
                                                        <a href="">link</a>
                                                        <a href="">Copy</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab01" role="tabpanel" aria-labelledby="tab01-tab">2...</div>
                                <div class="tab-pane fade" id="tab02" role="tabpanel" aria-labelledby="tab02-tab">3...</div>
                                <div class="tab-pane fade" id="tab03" role="tabpanel" aria-labelledby="tab03-tab">4...</div>
                                <div class="tab-pane fade" id="tab04" role="tabpanel" aria-labelledby="tab04-tab">5...</div>
                            </div>
                        </section>
                        <!-- main_end -->
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
    <!-- 自定義js -->
    <script src="js/script.js"></script>
</body>

</html>