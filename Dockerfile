FROM wyveo/nginx-php-fpm:php80
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx/nginx.conf /etc/nginx/nginx.conf
RUN service nginx restart
RUN service php8.0-fpm restart
