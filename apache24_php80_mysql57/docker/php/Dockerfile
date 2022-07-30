FROM php:8.0-apache

RUN apt-get update
RUN apt-get install -y \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd pdo_mysql mysqli mbstring intl zip

RUN a2enmod rewrite

RUN apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN usermod -u 1000 www-data && \
    groupmod -g 1000 www-data
