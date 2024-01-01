@extends('layouts.frontend')

@section('title','聯絡我們')

@section('content')
<!-- page_banner_start -->
<section class="uk-banner-container p-0">
    <div class="owl-carousel owl-theme">
        <!-- banner_item_start -->
        <div class="item">
            <div class="banner-item">
                <div class="bannerImg">
                    <a href="#" class="img-content img-banner">
                        <img src="{{getPagePhoto($viewName)}}" alt="" title="" />
                    </a>
                </div>
            </div>
        </div>
        <!-- banner_item_end -->
    </div>
</section>
<!-- page_banner_end -->
<!-- page_content_start -->
<section class="page-container">
    <div class="container">
        <div class="row row-margin">
            <div class="col-padding col-md-12">
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="/">首頁</a></li>
                        <li class="active">聯絡我們</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>聯絡我們</h1>
                </div>
                <div class="form-wrap">
                    <form action="handleContact" method="POST" class="form-horizontal">
                        @csrf
                        <div class="row row-margin">
                            <div class="col-md-6 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">公司名稱</label>
                                    <input type="text" class="form-control" id="cname" placeholder="" name="cname">
                                </div>
                            </div>
                            <div class="col-md-6 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">姓名<span class="requirement">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">信箱<span class="requirement">*</span></label>
                                    <input type="text" class="form-control" id="umail" placeholder="@gmail.com" name="umail">
                                </div>
                            </div>
                            <div class="col-md-6 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">電話<span class="requirement">*</span></label>
                                    <input type="text" class="form-control" id="tel" placeholder="" name="tel">
                                </div>
                            </div>
                            <div class="col-md-6 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">詢問類別<span class="requirement">*</span></label>
                                    <!-- checkbox_start -->
                                    <div class="checkbox">
                                        <input type="checkbox" class="" id="checkboxItem_01" placeholder="" name="checkboxItem_01">
                                        <label for="checkboxItem_01" class="control-label">產品相關</label>
                                    </div>
                                    <!-- checkbox_end -->
                                    <!-- checkbox_start -->
                                    <div class="checkbox">
                                        <input type="checkbox" class="" id="checkboxItem_02" placeholder="" name="checkboxItem_02">
                                        <label for="checkboxItem_02" class="control-label">價格相關</label>
                                    </div>
                                    <!-- checkbox_end -->
                                </div>
                            </div>
                            <div class="col-md-6 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">付款項目<span class="requirement">*</span></label>
                                    <!-- checkbox_start -->
                                    <div class="radio">
                                        <input type="radio" class="" id="radioXX_01" placeholder="" name="radioXX">
                                        <label for="radioXX_01" class="control-label">信用卡轉帳</label>
                                    </div>
                                    <!-- checkbox_end -->
                                    <!-- checkbox_start -->
                                    <div class="radio">
                                        <input type="radio" class="" id="radioXX_02" placeholder="" name="radioXX">
                                        <label for="radioXX_02" class="control-label">貨到付款</label>
                                    </div>
                                    <!-- checkbox_end -->
                                </div>
                            </div>
                            <div class="col-md-12 col-padding">
                                <div class="form-group">
                                    <label for="" class="control-label">詢問內容</label>
                                    <textarea class="form-control" rows="8" name="content" id="content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="uk-button" type="reset">取消</button>
                            <button class="uk-button mr-4" type="submit" id="contactformbtn">送出</button>
                        </div>
                    </form>
                </div>
                <!-- 內容_end -->
            </div>
        </div>
        <!-- 麵包屑_start -->
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
@endsection
