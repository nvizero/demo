<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title">一般設定 </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-product-hunt-line"></i>
                            <span>產品設定</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                          @can('products-list')
                            <li><a href="{{ route('products.index') }}">產品</a></li>
                          @endcan

                          @can('categories-list')
                            <li><a href="{{ route('categories.index') }}">產品分類</a></li>
                          @endcan

                          @can('aforms-list')
                            <li><a href="{{ route('aforms.index') }}">動態表單</a></li>
                          @endcan

                          @can('getform-list')
                            <li><a href="{{ route('getform.index') }}">詢問記錄</a></li>
                          @endcan
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="mdi mdi-account-edit-outline"></i>
                            <span>文章設定</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                          @can('posts-list')
                            <li><a href="{{ route('posts.index') }}">文章列表</a></li>
                          @endcan

                          @can('post_cates-list')
                            <li><a href="{{ route('post_cates.index') }}">文章分類</a></li>
                          @endcan
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="fas fa-address-book"></i>
                            <span>關於我們設定</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                          @can('abouts-list')
                          <li><a href="{{ route('abouts.index') }}">關於我們</a></li>
                          @endcan
                          @can('aboutCategories-list')
                          <li><a href="{{ route('aboutCategories.index') }}">關於我們分類</a></li>
                          @endcan
                        </ul>
                    </li>
                  </li>



                <li class="menu-title">網站設定 </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-admin-line"></i>
                            <span>基本設定</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                          @can('users-list')
                              <li><a href="{{ route('users.index') }}">{{ __('menu.admin_manage') }}</a></li>
                          @endcan

                          @can('roles-list')
                              <li><a href="{{ route('roles.index') }}">{{ __('menu.role_manage') }}</a></li>
                          @endcan

                          @can('index_about-list')
                            <li><a href="{{ route('index_about.index') }}">首頁-關於我們</a></li>
                          @endcan

                          @can('index_show-list')
                            <li><a href="{{ route('index_show.index') }}">首頁-橫幅標題(上方)</a></li>
                          @endcan
            
                          @can('keyval-list')
                            <li><a href="{{ route('keyval.index') }}">公司資訊</a></li>
                          @endcan

                          @can('page_photos-list')
                            <li><a href="{{ route('page_photos.index') }}">頁面圖片設定</a></li>
                          @endcan

                        </ul>
                    </li>
                  </li>
            </ul>
        </div>
    </div>
</div>
