FROM php:7.4.5-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y \
  libonig-dev \
  libicu-dev \
  libpng-dev \
  libzip-dev \
  zlib1g-dev \
  default-mysql-client \
  curl \
  gnupg \
  wget \
  zip \
  unzip

# Composer
RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www