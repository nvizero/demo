#!/bin/bash
# 

php artisan migrate:fresh --seed
php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=CreateAdminUserSeeder