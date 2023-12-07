<?php include("inc/memberHeader.php"); ?>
<!-- 內容_start -->
<section class='member-container' style="border: 1px solid #f00;">
    <div class="member-header">
        <div class="row row-margin align-items-center">
            <div class="col-md-12 col-padding">
                <div class="uk-content-subtitle p-0 m-0">
                    <h2>瀏覽紀錄</h2>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="" role="presentation">
            <button class="active" id="all-tab" data-toggle="tab" data-target="#all" type="button" role="tab" aria-controls="all-tab" aria-selected="true">產品</button>
        </li>
        <li class="" role="presentation">
            <button id="tab01-tab" data-toggle="tab" data-target="#tab01" type="button" role="tab" aria-controls="tab01-tab" aria-selected="false">文章</button>
        </li>
        <li class="" role="presentation">
            <button id="tab02-tab" data-toggle="tab" data-target="#tab02" type="button" role="tab" aria-controls="tab02-tab" aria-selected="false">檔案</button>
        </li>
    </ul>
    <div class="member-body">
        <!-- top-container -->
        <ul class='d-flex align-items-center mb-3 justify-content-end'>
            <li class='mr-3'>
                <!-- -->
                <div class='search-input'>
                    <form>
                        <input type='text' class='form-control' placeholder='請輸入關鍵字'>
                    </form>
                </div>
            </li>
            <li class='mr-3'>
                共 10 個檔案
            </li>
            <li class='mr-0'>
                <!-- -->
                <div class="form-select-button">
                    <select class="form-control text-center" id="exampleFormControlSelect1">
                        <option>時間排序高至低</option>
                        <option>時間排序低至高</option>
                    </select>
                </div>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="row row-margin row-high">
                    <!-- product_item_start -->
                    <div class="col-lg-2 col-md-3 col-sm-6 col-padding">
                        <!-- item-main_start -->
                        <div class="uk-card-item">
                            <div class="uk-card-header">
                                <a href="productCate.php" class='img-content img-1by1'><img src="images/sampleCategory/nike.jpg" /></a>
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
                    <div class="col-lg-2 col-md-3 col-sm-6 col-padding">
                        <!-- item-main_start -->
                        <div class="uk-card-item">
                            <div class="uk-card-header">
                                <a href="productCate.php" class='img-content img-1by1'><img src="images/sampleCategory/nike.jpg" /></a>
                            </div>
                            <div class="uk-card-body">
                                <a href="productCate.php" class='text-primary'>N-001</a><br />
                                <a href="productCate.php" class="text-title">{NIKE}</a><br />
                                <a href="productCate.php" class="uk-text-subtitle">{產品分類副標題}</a>
                            </div>
                            <div class="uk-card-footer">
                                <a href="productCate.php" class='ell-text'>{Our mission is what drives us to do everything possible to expand human potential.}</a>
                            </div>
                        </div>
                        <!-- item-main_end -->
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab01" role="tabpanel" aria-labelledby="tab01-tab">
                <ul class='uk-list-container'>
                    <!-- item_start -->
                    <li>
                        <div class="row row-margin align-items-center">
                            <div class="col-md-3 col-padding">
                                <a href="newsDt.php" class='img-content img-16by9'>
                                    <img src="images/newImg.jpeg" alt="">
                                </a>
                            </div>
                            <div class="col-md-9 col-padding">
                                <div class="uk-list-item">
                                    <time class="uk-text-subtitle">{2021 - 0227}</time><br />
                                    <a href="newsDt.php" class="text-title">{最新消息標題}</a><br />
                                    <a href="newsDt.php" class='ell-text'>{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- item_end -->
                    <!-- item_start -->
                    <li>
                        <div class="row row-margin align-items-center">
                            <div class="col-md-3 col-padding">
                                <a href="newsDt.php" class='img-content img-16by9'>
                                    <img src="images/newImg.jpeg" alt="">
                                </a>
                            </div>
                            <div class="col-md-9 col-padding">
                                <div class="uk-list-item">
                                    <time class="uk-text-subtitle">{2021 - 0227}</time><br />
                                    <a href="newsDt.php" class="text-title">{最新消息標題}</a><br />
                                    <a href="newsDt.php" class='ell-text'>{台灣往年遇到的颱風大多是從西北太平洋來的，根據氣象局2010年至2019年氣候年報顯示，西北太平洋海域全年颱風生成數最多的一年為2013年，當年有31個颱風生成；最少為2010年，有14個颱風生成。從生成月份來看，颱風主要生成季節於7月至10月，以2019年舉例，全年颱風總數為29個，8月、9月至11月生成數較多。}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- item_end -->
                </ul>
            </div>
            <div class="tab-pane fade" id="tab02" role="tabpanel" aria-labelledby="tab02-tab">
                <div class="downloadContent">
                    <ul>
                        <!-- 檔案下載資料_start -->
                        <li><a href="http://local.newoil3.com:7400/storage/uploads/uk-text-containerImg.jpg" download>{檔案下載名稱}</a></li>
                        <!-- 檔案下載資料_start -->
                        <li><a href="#" download>{檔案下載名稱}</a></li>
                        <li><a href="#" download>{檔案下載名稱}</a></li>
                        <li><a href="#" download>{檔案下載名稱}</a></li>
                        <li><a href="#" download>{檔案下載名稱}</a></li>
                        <li><a href="#" download>{檔案下載名稱}</a></li>
                    </ul>
                </div>
            </div>
        </div>
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
    <!-- 版權宣告 -->
    <!-- <div class="copyright">
        <div class="container">
            <p class='mb-0'>
                Copyright @ Newoil 3.0 / Designed by <a href="http://www.isb.com.tw">iSB</a> <a href="privacy.php">隱私權政策</a> / <a href="pageDt.php">服務條款</a>
            </p>
        </div>
    </div> -->
</section>
<!-- 內容_end -->
<?php include("inc/memberFoot.php"); ?>