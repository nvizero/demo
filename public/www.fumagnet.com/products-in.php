<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <?php include("head.php"); ?>
    <title>富磁特科技</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/unitPage.css">
    <link rel="stylesheet" href="./css/products.css">

</head>

<body>
    <?php include("navbar.php"); ?>
    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Products</small>
                        <span>產品與服務</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="products.php">產品與服務</a></li>
                            <li><span>永久磁鐵</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page ProductArea">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <h3 class="subTitle border-bottom font-MT">永久磁鐵 <small class="h6">Permanent Magnet</small></h3>
                    <div class="row row-cols-lg-3 row-cols-2 productList g-4">
                        <!-- item -->
                        <div class="col item">
                            <a href="products-detail.php">
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/products/type1-item-1.png);"></div>
                                    </div>
                                </div>
                                <div class="Txt">
                                    <b class="h4">燒結釹鐵硼</b>
                                    <small class="h6">Sintered NdFeB</small>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="">
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/products/type1-item-2.png);"></div>
                                    </div>
                                </div>
                                <div class="Txt">
                                    <b class="h4">膠磁</b>
                                    <small class="h6">Flexible Magnet</small>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="">
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/products/type1-item-3.png);"></div>
                                    </div>
                                </div>
                                <div class="Txt">
                                    <b class="h4">釤鈷</b>
                                    <small class="h6">SmCo</small>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="">
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/products/type1-item-4.png);"></div>
                                    </div>
                                </div>
                                <div class="Txt">
                                    <b class="h4">鋁鎳鈷</b>
                                    <small class="h6">AlNiCo</small>
                                </div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col item">
                            <a href="">
                                <div class="Img">
                                    <div class="innerImg">
                                        <div class="image" style="background-image: url(./images/products/type1-item-5.png);"></div>
                                    </div>
                                </div>
                                <div class="Txt">
                                    <b class="h4">鐵氧體</b>
                                    <small class="h6">Ferrite</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="subTitle border-bottom text-gray mt-2">CATEGORY</h5>
                    <ul class="categoryList">
                        <li><a href="products-in.php">永久磁鐵</a></li>
                        <li><a href="">金屬檢測器</a></li>
                        <li><a href="">磁性分離器</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>

</html>