<?php include("inc/memberHeader.php"); ?>
<!-- 內容_start -->
<section class='member-container' style="border: 1px solid #f00;">
    <div class="member-header">
        <div class="row row-margin align-items-center">
            <div class="col-md-6 col-padding">
                <div class="uk-content-subtitle p-0 m-0">
                    <h2>我的優惠券</h2>
                </div>
            </div>
            <div class="col-md-6 col-paddin text-right">
                <!-- 彈出視窗 -->
                <a href="product.php" class="uk-button bg-success text-light">兌換優惠券</a>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="" role="presentation">
            <button class="active" id="all-tab" data-toggle="tab" data-target="#all" type="button" role="tab" aria-controls="all-tab" aria-selected="true">所有優惠券</button>
        </li>
        <li class="" role="presentation">
            <button id="tab01-tab" data-toggle="tab" data-target="#tab01" type="button" role="tab" aria-controls="tab01-tab" aria-selected="false">尚未使用</button>
        </li>
        <li class="" role="presentation">
            <button id="tab02-tab" data-toggle="tab" data-target="#tab02" type="button" role="tab" aria-controls="tab02-tab" aria-selected="false">已使用</button>
        </li>
        <li class="" role="presentation">
            <button id="tab03-tab" data-toggle="tab" data-target="#tab03" type="button" role="tab" aria-controls="tab03-tab" aria-selected="false">已過期</button>
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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>優惠券名稱</td>
                                <td>類型</td>
                                <td>內容</td>
                                <td>起始時間</td>
                                <td>結束時間</td>
                                <td class='table-w-120 text-center'>維護</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- item_start -->
                            <tr>
                                <td>
                                    001
                                </td>
                                <td>
                                    優惠券名稱標題內容<br />
                                    <small class='text-secondary'>優惠券名稱概述與簡述內容...</small>
                                </td>
                                <td>
                                    <span class='text-success state-box'>尚未使用</span>
                                </td>
                                <td>
                                    免費
                                </td>
                                <td>
                                    <time>2023/07/30</time>
                                </td>
                                <td>
                                    <time>2023/07/31</time>
                                </td>
                                <td>
                                    <ul class='d-flex justify-content-center'>
                                        <li class='px-1'>
                                            <a href="coupon-dt.php" class="material-icons">
                                                content_copy
                                            </a>
                                        </li>
                                        <li class='px-1'>
                                            <a href="javascript:void(0);" class="material-icons">
                                                visibility
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- item_start -->
                            <tr>
                                <td>
                                    001
                                </td>
                                <td>
                                    優惠券名稱標題內容<br />
                                    <small class='text-secondary'>優惠券名稱概述與簡述內容...</small>
                                </td>
                                <td>
                                    <span class='text-danger state-box'>已使用</span>
                                </td>
                                <td>
                                    免費
                                </td>
                                <td>
                                    <time>2023/07/30</time>
                                </td>
                                <td>
                                    <time>2023/07/31</time>
                                </td>
                                <td>
                                    <ul class='d-flex justify-content-center'>
                                        <li class='px-1'>
                                            <a href="coupon-dt.php" class="material-icons">
                                                content_copy
                                            </a>
                                        </li>
                                        <li class='px-1'>
                                            <a href="javascript:void(0);" class="material-icons">
                                                visibility
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- item_start -->
                            <tr>
                                <td>
                                    001
                                </td>
                                <td>
                                    優惠券名稱標題內容<br />
                                    <small class='text-secondary'>優惠券名稱概述與簡述內容...</small>
                                </td>
                                <td>
                                    <span class='text-secondary state-box'>尚未使用</span>
                                </td>
                                <td>
                                    免費
                                </td>
                                <td>
                                    <time>2023/07/30</time>
                                </td>
                                <td>
                                    <time>2023/07/31</time>
                                </td>
                                <td>
                                    <ul class='d-flex justify-content-center'>
                                        <li class='px-1'>
                                            <a href="coupon-dt.php" class="material-icons">
                                                content_copy
                                            </a>
                                        </li>
                                        <li class='px-1'>
                                            <a href="javascript:void(0);" class="material-icons">
                                                visibility
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tab01" role="tabpanel" aria-labelledby="tab01-tab">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>優惠券名稱</td>
                                <td>類型</td>
                                <td>內容</td>
                                <td>起始時間</td>
                                <td>結束時間</td>
                                <td class='table-w-120 text-center'>維護</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- item_start -->
                            <tr>
                                <td>
                                    001
                                </td>
                                <td>
                                    優惠券名稱標題內容<br />
                                    <small class='text-secondary'>優惠券名稱概述與簡述內容...</small>
                                </td>
                                <td>
                                    <span class='text-success state-box'>尚未使用</span>
                                </td>
                                <td>
                                    免費
                                </td>
                                <td>
                                    <time>2023/07/30</time>
                                </td>
                                <td>
                                    <time>2023/07/31</time>
                                </td>
                                <td>
                                    <ul class='d-flex justify-content-center'>
                                        <li class='px-1'>
                                            <a href="coupon-dt.php" class="material-icons">
                                                content_copy
                                            </a>
                                        </li>
                                        <li class='px-1'>
                                            <a href="javascript:void(0);" class="material-icons">
                                                visibility
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tab02" role="tabpanel" aria-labelledby="tab02-tab">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>優惠券名稱</td>
                                <td>類型</td>
                                <td>內容</td>
                                <td>起始時間</td>
                                <td>結束時間</td>
                                <td class='table-w-120 text-center'>維護</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- item_start -->
                            <tr>
                                <td>
                                    001
                                </td>
                                <td>
                                    優惠券名稱標題內容<br />
                                    <small class='text-secondary'>優惠券名稱概述與簡述內容...</small>
                                </td>
                                <td>
                                    <span class='text-danger state-box'>已使用</span>
                                </td>
                                <td>
                                    免費
                                </td>
                                <td>
                                    <time>2023/07/30</time>
                                </td>
                                <td>
                                    <time>2023/07/31</time>
                                </td>
                                <td>
                                    <ul class='d-flex justify-content-center'>
                                        <li class='px-1'>
                                            <a href="coupon-dt.php" class="material-icons">
                                                content_copy
                                            </a>
                                        </li>
                                        <li class='px-1'>
                                            <a href="javascript:void(0);" class="material-icons">
                                                visibility
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tab03" role="tabpanel" aria-labelledby="tab03-tab">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>優惠券名稱</td>
                                <td>類型</td>
                                <td>內容</td>
                                <td>起始時間</td>
                                <td>結束時間</td>
                                <td class='table-w-120 text-center'>維護</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- item_start -->
                            <tr>
                                <td>
                                    001
                                </td>
                                <td>
                                    優惠券名稱標題內容<br />
                                    <small class='text-secondary'>優惠券名稱概述與簡述內容...</small>
                                </td>
                                <td>
                                    <span class='text-secondary state-box'>尚未使用</span>
                                </td>
                                <td>
                                    免費
                                </td>
                                <td>
                                    <time>2023/07/30</time>
                                </td>
                                <td>
                                    <time>2023/07/31</time>
                                </td>
                                <td>
                                    <ul class='d-flex justify-content-center' id='disable'>
                                        <li class='px-1'>
                                            <a href="coupon-dt.php" class="material-icons">
                                                content_copy
                                            </a>
                                        </li>
                                        <li class='px-1'>
                                            <a href="javascript:void(0);" class="material-icons">
                                                visibility
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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