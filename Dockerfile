FROM composer/composer:php7 as vendor

WORKDIR /phpspec/

COPY composer.json composer.json

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts

FROM php:7
