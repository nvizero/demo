<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\Keyval;
use App\Models\Category;
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
        $this->initCate();

        $permissions = [
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
            'posts' => [
                'posts-list',
                'posts-create',
                'posts-edit',
                'posts-delete',
            ],
            #安全管理
            'products' => [
                'products-list',
                'products-create',
                'products-edit',
                'products-delete',
            ],
            #後台管理員
            'users' => [
                'users-list',
                'users-create',
                'users-edit',
                'users-delete',
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
    }

    //create Roles
    public function initVK()
    {
        Keyval::create(['title' => '公司',
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
    public function initCate(){
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
