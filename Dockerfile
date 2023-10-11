FROM wyveo/nginx-php-fpm:php80
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

