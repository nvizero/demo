FROM skyapm/skywalking-php

RUN apk add --no-cache libzip-dev
RUN apk add --no-cache zlib-dev
RUN apk add --no-cache libpng-dev
RUN apk add --no-cache libjpeg-turbo-dev
RUN apk add --no-cache freetype-dev
RUN apk add --no-cache libxslt-dev
RUN apk add --no-cache postgresql-dev
RUN apk add --no-cache libmcrypt-dev
RUN apk add --no-cache gettext-dev
RUN apk add --no-cache libmemcached-dev
RUN apk add --no-cache libffi-dev
RUN apk add --no-cache oniguruma-dev
RUN apk add --no-cache gd 

RUN apk add --no-cache mariadb-dev mariadb-connector-c-dev \
    && docker-php-ext-install pdo_mysql


