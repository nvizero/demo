<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\Keyval;
use App\Models\Category;
use App\Models\PostCategory;
use App\Models\AboutCategory;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         
        //create Roles
        $this->initRoles();        
        $this->initVK();
        $this->initProductCate();
        $this->initPostCate();
        $this->initAcoutCate();

        #aboutCategories
        $permissions = [
            #abouts
            'abouts' => [
                'abouts-list',
                'abouts-create',
                'abouts-edit',
                'abouts-delete',
            ],
            #用戶組
            'aboutCategories' => [
                'aboutCategories-list',
                'aboutCategories-create',
                'aboutCategories-edit',
                'aboutCategories-delete',
            ],
            #用戶組
            'roles' => [
                'roles-list',
                'roles-create',
                'roles-edit',
                'roles-delete',
            ],
            #一般用戶
            'customers' => [
                'customers-list',
                'customers-create',
                'customers-edit',
                'customers-delete',
            ],
            #後台橾作記錄
            'operates' => [
                'operates-list',
                // 'operates-create',
                // 'operates-edit',
                // 'operates-delete',
            ],
            #動態表單
            'aforms' => [
                'aforms-list',
                'aforms-create',
                'aforms-delete',
            ],
            #新聞管理
            'post_cates' => [
                'post_cates-list',
                'post_cates-create',
                'post_cates-edit',
                'post_cates-delete',
            ],
            #新聞管理
            'posts' => [
                'posts-list',
                'posts-create',
                'posts-edit',
                'posts-delete',
            ],
            #後台管理員
            'users' => [
                'users-list',
                'users-create',
                'users-edit',
                'users-delete',
            ],
            #index about
            'page_photos' => [
                'page_photos-list',
                'page_photos-create',
                'page_photos-edit',
                'page_photos-delete',
            ],
            #index about
            'index_about' => [
                'index_about-list',
                'index_about-create',
                'index_about-edit',
                'index_about-delete',
            ],
            #index show
            'index_show' => [
                'index_show-list',
                'index_show-create',
                'index_show-edit',
                'index_show-delete',
            ],
            #辭條
            'keyval' => [
                'keyval-list',
                'keyval-create',
                'keyval-edit',
                'keyval-delete',
            ],
            #分類
            'categories' => [
                'categories-list',
                'categories-create',
                'categories-edit',
                // 'categories-delete',
            ],
            #新聞分類
            'postCategories' => [
                'postCategories-list',
                'postCategories-create',
                'postCategories-edit',
                'postCategories-delete',
            ],
            #Script
            'scripts' => [
                'scripts-list',
                'scripts-create',
                'scripts-edit',
                'scripts-delete',                
            ],
        ];

        foreach ($permissions as $main => $permission) {
            foreach ($permission as $name) {
                Permission::create(['main' => $main, 'name' => $name]);
            }
        }

        $arys = ['products','getform'] ;
        foreach($arys as $perm){
          foreach(self::combile($perm)[$perm] as $name){
            Permission::create(['main' => $perm, 'name' => $name]);
            // print_r(self::combile($perm)[$perm]);
          }
        }
    }
  
    public function combile($str){
      $baseScripts = [
          'list',
          'create',
          'edit',
          'delete',
      ];

      $prefixedScripts = array_map(function($script) use ($str) {
          return $str.'-' . $script;
      }, $baseScripts);

      return $scriptsArray = [
          $str => $prefixedScripts,
      ];

      // 打印结果查看

    }
    public function initAcoutCate(){

      AboutCategory::create(
        [
            'name' => '產品',
            'able' => 1, 
            'sort' => 1,
            'level' => 1,
            'parent_id'=>1,
            'subtitle'=>'產品說明',
            'img'=>"/images/image.png", 
            'content'=>"/images/image.png", 
            "updated_at"=>date("Y-m-d H:i:s"),
            "created_at"=>date("Y-m-d H:i:s")
        ]
      );

      AboutCategory::create(
        [
            'name' => '分公司',
            'able' => 1, 
            'sort' => 2,
            'level' => 1,
            'parent_id'=>1,
            'subtitle'=>'分公司說明',
            'img'=>"/images/image.png", 
            'content'=>"/images/image.png", 
            "updated_at"=>date("Y-m-d H:i:s"),
            "created_at"=>date("Y-m-d H:i:s")
        ]
      );
    }

    //create Roles
    public function initVK()
    {
        Keyval::create([
          'title' => '公司',
          'key' => 'main', 
          'value' => '家家科技',
          'is_flag'=>1,
          'sort'=>1, 
          "updated_at"=>date("Y-m-d H:i:s"),
          "created_at"=>date("Y-m-d H:i:s")]
        );

        Keyval::create(['title' => 'tel',
          'key' => 'tel', 
          'value' => '091234457',
          'is_flag'=>1,
          'sort'=>2, 
          "updated_at"=>date("Y-m-d H:i:s"),
          "created_at"=>date("Y-m-d H:i:s")]
        );
    }
    //分類
    public function initPostCate(){

      PostCategory::create([
        'title'=>"選舉",
        'parent_id'=>0,
        'level'=>1,
        'subtitle'=>1,
        'content'=>1,
        'able'=>1,
        'sort'=>1,
        'img'=>'/images/image.png',
      ]);

      PostCategory::create([
        'title'=>"區域",
        'parent_id'=>1,
        'level'=>2,
        'subtitle'=>1,
        'content'=>1,
        'able'=>1,
        'sort'=>2,
        'img'=>'/images/image.png',
      ]);
    
      PostCategory::create([
        'title'=>"中區",
        'parent_id'=>2,
        'level'=>3,
        'subtitle'=>1,
        'content'=>1,
        'able'=>1,
        'sort'=>2,
        'img'=>'/images/image.png',
      ]);

      PostCategory::create([
        'title'=>"北區",
        'parent_id'=>2,
        'level'=>3,
        'subtitle'=>1,
        'content'=>1,
        'able'=>1,
        'sort'=>2,
        'img'=>'/images/image.png',
      ]);

    }
    //分類
    public function initProductCate(){

      Category::create([
        'title'=>"亞洲",
        'parent_id'=>0,
        'level'=>1,
        'subtitle'=>1,
        'content'=>1,
        'img'=>'/images/image.png',
      ]);

      Category::create([
        'title'=>"台灣",
        'parent_id'=>1,
        'level'=>2,
        'subtitle'=>1,
        'content'=>1,
        'img'=>'/images/image.png',
      ]);

      Category::create([
        'title'=>"星星科技",
        'parent_id'=>2,
        'level'=>3,
        'subtitle'=>1,
        'content'=>1,
        'img'=>'/images/image.png',
      ]);

    }

    //create Roles
    public function initRoles()
    {
        $roles = ['超级管理员', '管理员', ];
        foreach ($roles as $name) {
            Role::create(['name' => $name, 'guard_name' => 'web']);
        }
    }

}
