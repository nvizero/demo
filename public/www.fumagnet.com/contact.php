<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <?php include("head.php"); ?>
    <title>富磁特科技</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/unitPage.css">
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
    <?php include("navbar.php"); ?>
    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Contact Us</small>
                        <span>聯絡富磁特</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="contact.php">聯絡富磁特</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page mainContact ">
        <div class="container bg-white">
            <div class="row  py-3">
                <div class="col-12 g-0">
                    <h3 class="titleBox font-MT pt-5 pb-3  mb-3 px-3">
                        聯絡資訊
                        <small class="h6 text-green">Contact Information</small>
                    </h3>
                </div>
                <div class="col-12 ">
                    <ul class="contactInfo px-lg-5">
                        <li><b>聯絡電話</b><span>+886-49-239-3330</span></li>
                        <li><b>傳真電話</b><span>+886-49-239-3331</span></li>
                        <li><b>聯絡地址</b><span>54041南投縣南投市新興路327巷2號 <a href="https://goo.gl/maps/aEtp6Wgx3WxXQbtd8" target="_blank">[MAP]</a></span>
                            <small>No.2, Ln 327, Nanxin Rd. <br>
                                Nantou City, Nantou Country 54041 <br>
                                Taiwan(R.O.C)
                            </small>
                        </li>
                        <li><b>工廠位置</b><span>江蘇省蘇州市吳中區(金利達園區)</span>
                            <small>
                                Jinlida, Stamping Park, <br>
                                Wuzhong Dist., Suzhou City, Jiangxian,<br>
                                China
                            </small>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col g-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.7524867754796!2d120.69078351545045!3d23.933817184499304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346931c65b704b43%3A0xf63c4662850b3a76!2zNTQw5Y2X5oqV57ij5Y2X5oqV5biC5paw6IiI6LevMzI36Jmf!5e0!3m2!1szh-TW!2stw!4v1669361743604!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 g-0">
                    <div class="titleBox font-MT pt-5 pb-3  mb-3 px-3">
                        <h3>表單聯絡</h3>
                        <p>歡迎您透過本表單給予我們任何訊息及意見</p>
                    </div>
                </div>
                <div class="col-12">
                    <form class="p-lg-5 py-3">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <label class="form-label">名字 &nbsp;&nbsp;&nbsp;
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contact_sex" id="inlineRadio1" value="男" checked="">
                                        <label class="form-check-label" for="inlineRadio1">先生</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contact_sex" id="inlineRadio2" value="女">
                                        <label class="form-check-label" for="inlineRadio2">小姐</label>
                                    </div>
                                </label>
                                <input class="form-control" type="text" placeholder="First name" required="required">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">姓氏</label>
                                <input class="form-control" type="text" placeholder="Last name" required="required">
                            </div>
                            <div class="col-12">
                                <label class="form-label">電子郵件</label>
                                <input type="email" class="form-control">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="col-12">
                                <label class="form-label">連絡電話</label>
                                <input class="form-control" type="text" placeholder="連絡電話" required="required">
                            </div>
                            <div class="col-12">
                                <label class="form-label">留言詢問</label>
                                <textarea class="form-control" cols="1" rows="5" placeholder="歡迎留言，將有專人為您服務"></textarea>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-primary btn-block px-5" type="submit" value="送出">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include("footer.php"); ?>
</body>

</html>