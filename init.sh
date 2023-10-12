#!/bin/bash
# 

/usr/bin/php /var/www/artisan migrate:fresh --seed
/usr/bin/php /var/www/artisan db:seed --class=PermissionTableSeeder
/usr/bin/php /var/www/artisan db:seed --class=CreateAdminUserSeeder
/usr/bin/php /var/www/artisan config:cache
rm -rf /var/www/public/storage
/usr/bin/php /var/www/artisan storage:link
