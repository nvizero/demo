<div class="col-md-10 col-padding">
    <nav>
        <ul id="mainMenu" itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="uk-main-nav d-flex justify-content-end align-items-center">

            <li itemprop="name">
                <a itemprop="url" href="#" class="arrowDown">關於我們</a>
                <ul class="dropdownMenu">
                    {!! getAbouts() !!}
                </ul>
            </li>
            <li itemprop="name">
                <a itemprop="url" href="product.php" class="arrowDown">產品目錄</a>
                <ul class="dropdownMenu">
                    <li><a href="javascript:void(0);">產品分類(一)</a></li>
                    <li><a href="javascript:void(0);">產品分類(二)</a></li>
                </ul>
            </li>
            <li itemprop="name">
                <a itemprop="url" href="javascript:void(0);">活動報名</a>
            </li>
            <li itemprop="name">
                <a itemprop="url" href="newsList.php">最新消息</a>
            </li>
            
            <li itemprop="name">
                <a itemprop="url" href="contact.php">連路我們</a>
            </li>
            {{-- <li class='lang-btn liner-button'>
                <a itemprop="url" href="javascript:void(0);" class='after-none'>En</a>
            </li>
            <li class='lang-btn liner-button'>
                <a itemprop="url" href="javascript:void(0);" class='after-none'>Tw</a>
            </li>
            <li> --}}
                <div class="">
                    <form>
                        <div class='searchContent'>
                            <div class="row row-margin">
                                <div class="col-md-9 col-padding">
                                    <input type='text' class='form-control' placeholder='請輸入關鍵字'>
                                </div>
                                <!-- <div class="col-md-3 col-padding">
                                    <button type='submit' class='searchBtn'></button>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</div>