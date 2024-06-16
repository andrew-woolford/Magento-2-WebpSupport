# WebpSupport
A module for getting Webp images to work in Magento 2 (work in progress)

So I started to create this to try and get Webp images to work in Magento 2 but this is still ongoing, I was trying to get it working in Docker first but probably need the following PHP extensions added into the Dockerfile -  **php-gd or php-imagick **

This is the new Dockerfile which was used in Mark Shusts Magento docker setup

```FROM markoshust/magento-php:8.3-fpm-1

USER root

RUN apt-get update; \
    apt-get install -y libmagickwand-dev; \
    pecl install imagick; \
    docker-php-ext-enable imagick;

RUN apk add --no-cache \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev \
        freetype-dev

RUN docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype
RUN docker-php-ext-install gd

USER app


