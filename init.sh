#!/bin/bash
# 

/usr/bin/php /var/www/artisan migrate:fresh --seed
/usr/bin/php /var/www/artisan db:seed --class=PermissionTableSeeder
/usr/bin/php /var/www/artisan db:seed --class=CreateAdminUserSeeder
