<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <?php include("head.php"); ?>
    <title>富磁特科技</title>
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
                            <!-- <li><span></span></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page ServiceArea ">
        <div class="container">
            <div class="row serviceList row-cols-lg-2 row-cols-1 g-5">
                <div class="col item">
                    <a href="services-in.php">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(images/service/cover-type-1.jpg);"></div>
                            <h5 class="title">
                                <b>食品飲料產業</b>
                                <small class="h6">Food & Beverage Industry</small>
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col item">
                    <a href="#">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(images/service/cover-type-2.jpg);"></div>
                            <h5 class="title">
                                <b>製藥產業</b>
                                <small class="h6">Pharmaceuticals</small>
                            </h5>
                        </div>
                    </a>
                </div>

                <div class="col item">
                    <a href="#">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(images/service/cover-type-3.jpg);"></div>
                            <h5 class="title">
                                <b>資源回收產業</b>
                                <small class="h6">Resource Recycling Industry</small>
                            </h5>
                        </div>
                    </a>
                </div>

                <div class="col item">
                    <a href="#">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(images/service/cover-type-4.jpg);"></div>
                            <h5 class="title">
                                <b>鋼鐵工業</b>
                                <small class="h6">Steel industry</small>
                            </h5>
                        </div>
                    </a>
                </div>

                <div class="col item">
                    <a href="#">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(images/service/cover-type-5.jpg);"></div>
                            <h5 class="title">
                                <b>塑料工業</b>
                                <small class="h6">plastic industry</small>
                            </h5>
                        </div>
                    </a>
                </div>

                <div class="col item">
                    <a href="#">
                        <div class="innerImg">
                            <div class="image" style="background-image: url(images/service/cover-type-6.jpg);"></div>
                            <h5 class="title">
                                <b>電池材料</b>
                                <small class="h6">Battery industry</small>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php include("footer.php"); ?>
</body>

</html>