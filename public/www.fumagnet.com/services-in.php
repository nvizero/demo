<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <?php include("head.php"); ?>
    <title>富磁特科技</title>
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/unitPage.css">
    <link rel="stylesheet" href="./css/services.css">

</head>

<body>
    <?php include("navbar.php"); ?>
    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Products And Services</small>
                        <span>應用領域</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="services.php">應用領域</a></li>
                            <li><span>食品飲料產業</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page serviceArea">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <h3 class="subTitle border-bottom font-MT">食品飲料產業 <small class="h6">Food & Beverage Industry</small></h3>
                    <div class="row row-cols-lg-2 row-cols-1  productList g-4">
                        <!-- item -->
                        <div class="col item">
                            <a href="./images/service/type1/item-1.jpg" data-fancybox="" data-caption="食品相關設備">
                                <div class="Txt">
                                    <b class="h5">食品相關設備</b>
                                </div>
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/service/type1/item-1.jpg);"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="./images/service/type1/item-2.jpg" data-fancybox="" data-caption="巧克力工廠">
                                <div class="Txt">
                                    <b class="h5">巧克力工廠</b>
                                </div>
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/service/type1/item-2.jpg);"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="./images/service/type1/item-3.jpg" data-fancybox="" data-caption="穀物碾磨業">
                                <div class="Txt">
                                    <b class="h5">穀物碾磨業</b>
                                </div>
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/service/type1/item-3.jpg);"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="./images/service/type1/item-4.jpg" data-fancybox="" data-caption="蔬菜加工">
                                <div class="Txt">
                                    <b class="h5">蔬菜加工</b>
                                </div>
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/service/type1/item-4.jpg);"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="subTitle border-bottom text-gray mt-2">CATEGORY</h5>
                    <ul class="categoryList">
                        <li><a href="services-in.php">食品飲料產業</a></li>
                        <li><a href="">製藥產業</a></li>
                        <li><a href="">資源回收產業</a></li>
                        <li><a href="">鋼鐵工業</a></li>
                        <li><a href="">塑料工業</a></li>
                        <li><a href="">電池材料</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <?php include("footer.php"); ?>
</body>

</html>