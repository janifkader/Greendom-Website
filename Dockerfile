FROM php:8.1-apache

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_pgsql

COPY . /var/www/html/

WORKDIR /var/www/html

EXPOSE 80