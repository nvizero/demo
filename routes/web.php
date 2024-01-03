<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => "Admin"], function () {

    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');   #後台首頁
    Route::resource('roles', 'RoleController');                                 #用戶組/角色
    Route::resource('users', 'UserController');                                 #後台管理員
    Route::resource('posts', 'PostController');                                 #新聞管理
    Route::resource('post_cates', 'PostCategoryController');                #新闻分类管理
    Route::resource('products', 'ProductController');
    Route::resource('abouts', 'AboutController');
    Route::resource('index_about', 'IndexAboutController');
    Route::resource('index_show', 'IndexShowController');
    Route::resource('keyval', 'KeyvalController');
    Route::resource('aforms', 'AformController');
    Route::resource('getform', 'GetformController');
    Route::resource('categories', 'CategoryController');
    Route::resource('aboutCategories', 'AboutCategoryController');
    Route::resource('page_photos', 'PagePhotoController');
    Route::post('delimage', 'TemplateController@delimage')->name('delimage');               //刪除圖片
    Route::post('destroy_image', 'TemplateController@remove_image')->name('destroy_image'); //刪除圖片
    Route::get('google2faSet/{id}',  'UserController@google2faSet')->name('users.google2faSet');

    Route::get('post-cate-tree-view',['uses'=>'PostCategoryController@manageCategory'])->name('postcatelist');
    Route::post('add-post-category',['as'=>'add.postCategory','uses'=>'PostCategoryController@addCategory']);

    Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory'])->name('prodcatelist');;
    Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);
});

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about/{id}', 'HomeController@about')->name('about');
Route::get('/about_cates/{id}', 'HomeController@about_cates')->name('about_cates');
Route::get('/abouts', 'HomeController@abouts')->name('abouts');
Route::get('/hashtag/{tag}', 'HomeController@hashtag')->name('hashtag');
Route::post('uploadimgs', 'HomeController@uploadimgs')->name('uploadimgs');

#posts
Route::get('/posts', 'PostController@posts')->name('posts');
Route::get('/post/{id}/{parent_id}', 'PostController@post_details');
Route::get('/posts_categories/{id}', 'PostController@postCategoriesById');

#porducts
Route::get('/prod_details/{id}/{parent_id}', 'ProdController@details');
Route::get('/prod_categories/{id}', 'ProdController@prodCategoriesById');
Route::get('/products', 'ProdController@products');
Route::post('/prod_aform', 'ProdController@prod_aform');

