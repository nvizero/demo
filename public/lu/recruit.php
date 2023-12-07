<?php include("inc/HEAD.php"); ?>
<!-- 內容_start -->
<!-- page_banner_start -->
<section class="uk-banner-container">
    <div class="">
        <div class="owl-carousel owl-theme">
            <!-- banner_item_start -->
            <div class="item">
                <div class="banner-item">
                    <div class="bannerImg">
                        <a href="#" class="img-content img-banner">
                            <img src="images/banner/81438612_p0.png" alt="" title="" />
                        </a>
                    </div>
                    <div class="banner-text">
                        <p class='text-title'>{Title}
                        </p>
                        <p class='uk-text-subtitle'>{Subtitle}
                        </p>
                        
                    </div>
                </div>
            </div>
            <!-- banner_item_end -->
        </div>
    </div>
</section>
<!-- page_banner_end -->
<!-- page_content_start -->
<section class="page-container">
    <div class="container">
        <div class="row row-margin">
            <div class="col-padding col-md-3">
                <aside class="sideContnet">
                    <ul>
                        <li class="sideInner active">
                            <span href="recruit.php" class="uk-text-subtitle">{人才招募}</span>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-padding col-md-9">
                <!-- 麵包屑_start -->
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="index.php">{首頁}</a></li>
                        <li class="active">{人才招募}</li>
                    </ul>
                </div>
                <!-- 麵包屑_end -->
                <div class="uk-content-title">
                    <h1>
                        {人才招募}
                    </h1>
                </div>
                <div class="collapseContent">
                    <!-- list_item_start -->
                    <div class="card">
                        <div class="card-header" id="heading01">
                            <h2 class="mb-0">
                                <button type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                    Junior Front-End Developer 前端工程師 2 名
                                </button>
                            </h2>
                        </div>
                        <div id="collapse01" class="collapse show" aria-labelledby="heading01" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class='uk-text-container'>
                                    <p class='uk-text-subtitle'>【 工作內容 】</p>
                                    <p class='txtNormal'>網站專案HTML5前端切版、動態特效程式、Wordpress等。</p>
                                    <p class='uk-text-subtitle'>【 工作條件 (必備) 】</p>
                                    <ul>
                                        <li>✓　HTML5、SCSS</li>
                                        <li>✓　使用過Vue.js</li>
                                        <li>✓　使用過Git版本控制</li>
                                    </ul>
                                    <p class='uk-text-subtitle'>【 加分條件 】</p>
                                    <ul>
                                        <li>＋　Wordpress CMS</li>
                                        <li>＋　Nuxt.js</li>
                                        <li>＋　API串接經驗</li>
                                        <li>＋　特效網站、套件(ex. PIXI, GSAP, Three….) 相關經驗</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list_item_end -->
                    <!-- list_item_start -->
                    <div class="card">
                        <div class="card-header" id="heading02">
                            <h2 class="mb-0">
                                <button type="button" data-toggle="collapse" data-target="#collapse02" aria-expanded="true" aria-controls="collapse02">
                                    Senior Front-End Developer 資深前端工程師 1 名
                                </button>
                            </h2>
                        </div>
                        <div id="collapse02" class="collapse" aria-labelledby="heading02" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class='uk-text-container'>
                                    <p class='uk-text-subtitle'>【 工作內容 】</p>
                                    <ul>
                                        <li>1. 網站專案HTML5前端切版、動態特效程式、Wordpress等。</li>
                                        <li>2. 相關規格與技術文件撰寫。</li>
                                    </ul>
                                    <p class='uk-text-subtitle'>【 工作條件 (必備) 】</p>
                                    <ul>
                                        <li>✓　至少 3 年以上從事前端開發的經歷</li>
                                        <li>✓　熟悉Vue.js框架</li>
                                        <li>✓　熟悉HTML5、SCSS開發方式</li>
                                        <li>✓　熟悉前後端分離架構</li>
                                        <li>✓　熟悉 WordPress</li>
                                        <li>✓　熟悉API串接</li>
                                        <li>✓　良好溝通能力</li>
                                        <li>✓　使用過Git版本控制</li>
                                    </ul>
                                    <p class='uk-text-subtitle'>【 加分條件 】</p>
                                    <ul>
                                        <li>＋　有團隊管理能力經驗</li>
                                        <li>＋　使用過Nuxt.js技術 / Node.js技術 / docker環境</li>
                                        <li>＋　動態特效相關作品</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list_item_end -->
                </div>
                <!-- <div class="custFormContent">
                    <div class="uk-content-title">
                        {應徵表單}
                    </div>
                    <div class="form-wrap">
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="control-label">{姓名}<span class="requirement">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">{信箱}<span class="requirement">*</span></label>
                                <input type="text" class="form-control" id="umail" placeholder="@gmail.com" name="umail">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">{電話}<span class="requirement">*</span></label>
                                <input type="text" class="form-control" id="tel" placeholder="" name="tel">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">{曾任職產業}<span class="requirement">*</span></label>
                                <div class="checkbox">
                                    <input type="checkbox" class="" id="checkboxItem_01" placeholder="" name="checkboxItem_01">
                                    <label for="checkboxItem_01" class="control-label">傳統製造業</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="" id="checkboxItem_02" placeholder="" name="checkboxItem_02">
                                    <label for="checkboxItem_02" class="control-label">網際網路相關產業</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">{期望待遇}<span class="requirement">*</span></label>
                                <div class="radio">
                                    <input type="radio" class="" id="radioXX_01" placeholder="" name="radioXX">
                                    <label for="radioXX_01" class="control-label">26,000 ~ 40,000</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" class="" id="radioXX_02" placeholder="" name="radioXX">
                                    <label for="radioXX_02" class="control-label">40,000 up</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="myfile" class="control-label">{上傳作品集}</label>
                                <div class="addFile">
                                    <input type="file">
                                </div>
                                <p class="remarkText">* File only for jpeg、jpg、png、pdf , file size doesn't exceed 2 MB </p>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">{自薦信}</label>
                                <textarea class="form-control" rows="8" name="content" id="content"></textarea>
                            </div>
                            <div class="formBtnContent">
                                <button class="formBtnReset" type="reset">取消</button>
                                <button class="formBtn" type="submit" id="contactformbtn">送出</button>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- page_content_end -->
<!-- 內容_end -->
<?php include("inc/FOOT.php"); ?>