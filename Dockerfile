FROM php:7.1
RUN apt-get update && apt-get install -y libmcrypt-dev default-mysql-client \
    && docker-php-ext-install mcrypt pdo_mysql
WORKDIR /var/www

FROM nginx:1.10
ADD ./vhost.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www