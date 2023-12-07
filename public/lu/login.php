<?php include("inc/HEAD.php"); ?>
<!-- 內容_start -->
<!-- page_content_start -->
<section class="page-container ">
    <div class="container">
        <div class="row justify-content-center" style="border: 1px solid #f00;">
            <div class="col-md-3">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">帳號</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密碼</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="row row-margin text-center">
                        <div class="col-md-6 col-padding">
                            <a href="signUp.php">註冊<small></small></a>
                        </div>
                        <div class="col-md-6 col-padding">
                            <a href="forget.php"><small>忘記密碼？</small></a>
                        </div>
                    </div>
                    <div class="formBtnContent row row-margin">
                        <div class="col-md-12 col-padding"><button type="submit" class="formBtn w-100">登入</button></div>
                        <div class="col-md-12 col-padding"><a href="finish.php" class="formBtn w-100">登入(測試用)</a></div>
                        <div class="col-md-12 col-padding"><a href="index.html" class="formBtn w-100">登入(往首頁)</a></div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="linkItem">
                            <a href="#" class="linkItemIcon">
                                <img src="images/socialmedia/wechat.svg" />
                            </a>
                            <a href='#' class='linkItemText'>
                            wechat
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="linkItem">
                            <a href="#" class="linkItemIcon">
                                <img src="images/socialmedia/line.svg" />
                            </a>
                            <a href='#' class='linkItemText'>
                                Line
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="linkItem">
                            <a href="#" class="linkItemIcon">
                                <img src="images/socialmedia/wechat.svg" />
                            </a>
                            <a href='#' class='linkItemText'>
                                Wechat
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="linkItem">
                            <a href="#" class="linkItemIcon">
                                <img src="images/socialmedia/twitter.svg" />
                            </a>
                            <a href='#' class='linkItemText'>
                                Twitter
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="linkItem">
                            <a href="#" class="linkItemIcon">
                                <img src="images/socialmedia/facebook.svg" />
                            </a>
                            <a href='#' class='linkItemText'>
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<?php include("inc/FOOT.php"); ?>