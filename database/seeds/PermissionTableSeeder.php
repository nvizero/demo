<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\PostCategory;
use App\Models\Industry;
use App\Models\BusinessCategory;
use App\Models\BusinessTag;
use App\Models\Area;
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


        $permissions = [
             //'cnns' => [ 
             //  'cnns-list',
             //  'cnns-create',
             //  'cnns-edit',
             //  'cnns-delete',
             //],
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
            #新聞管理
            'news' => [
                'news-list',
                'news-create',
                'news-edit',
                'news-delete',
            ],
            #安全管理
            'safeties' => [
                'safeties-list',
                'safeties-create',
                'safeties-edit',
                'safeties-delete',
            ],
            #安全管理
            'prods' => [
                'prods-list',
                'prods-create',
                'prods-edit',
                'prods-delete',
            ],
            #後台管理員
            'users' => [
                'users-list',
                'users-create',
                'users-edit',
                'users-delete',
            ],
            #新聞分類
            'postCategories' => [
                'postCategories-list',
                'postCategories-create',
                'postCategories-edit',
                'postCategories-delete',
            ],
            #半導體管理    
            'semics' => [
                'semics-list',
                'semics-create',
                'semics-edit',
                'semics-delete',
            ],             
            #半導體分類管理
            'semicCates' => [
                'semicCates-list',
                'semicCates-create',
                'semicCates-edit',
                'semicCates-delete',
            ],
            #除鐵器管理    
            'irons' => [
                'irons-list',
                'irons-create',
                'irons-edit',
                'irons-delete',
            ],             
            #除鐵器分類管理
            'ironCates' => [
                'ironCates-list',
                'ironCates-create',
                'ironCates-edit',
                'ironCates-delete',
            ],
            #圖片管理
            'advertisings' => [
                'advertisings-list',
                'advertisings-create',
                'advertisings-edit',
                'advertisings-delete',
            ],
            #地區管理
            'areas' => [
                'areas-list',
                'areas-create',
                'areas-edit',
                'areas-delete',
            ],
            #行業管理
            'industries' => [
                'industries-list',
                'industries-create',
                'industries-edit',
                'industries-delete',
            ],
            #業務分類管理
            'businessCategories' => [
                'businessCategories-list',
                'businessCategories-create',
                'businessCategories-edit',
                'businessCategories-delete',
                'businessCategories-show-list',
            ],
            'businesses' => [
                'businesses-list',
                'businesses-create',
                'businesses-edit',
                'businesses-delete',
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
    public function initRoles()
    {
        $roles = ['超级管理员', '管理员', ];
        foreach ($roles as $name) {
            Role::create(['name' => $name, 'guard_name' => 'web']);
        }
    }

}
