FROM php:7.4-fpm

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

RUN apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/bin/composer

RUN usermod -u 1000 www-data && \
    groupmod -g 1000 www-data

WORKDIR /var/www
