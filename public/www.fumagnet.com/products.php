<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <?php include("head.php"); ?>
    <title>富磁特科技</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/unitPage.css">
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
                            <!-- <li><span></span></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page ProductArea">
        <div class="container">

            <div class="row productTypeList g-3">
                <div class="col-lg-4">
                    <a href="products-in.php">
                        <h5 class="productType">
                            <b>永久磁鐵</b>
                            <small class="h6">Permanent Magnet</small>
                        </h5>
                        <div class="innerImg">
                            <div class="image" style="background-image: url(./images/products/cover-type-1.png);"></div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="products-in.php">
                        <h5 class="productType">
                            <b>磁性分離器</b>
                            <small class="h6">Magnetic Separator</small>
                        </h5>
                        <div class="innerImg">
                            <div class="image" style="background-image: url(./images/products/cover-type-2.png);"></div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="products-in.php">
                        <h5 class="productType">
                            <b>金屬檢測器</b>
                            <small class="h6">Metal Detector</small>
                        </h5>
                        <div class="innerImg">
                            <div class="image" style="background-image: url(./images/products/cover-type-3.png);"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <?php include("footer.php"); ?>
</body>

</html>