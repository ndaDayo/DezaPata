FROM php:7.2.24-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y libicu-dev libpng-dev libzip-dev zlib1g-dev default-mysql-client curl gnupg wget zip unzip \
  && docker-php-ext-install zip intl gd mysqli pdo_mysql mbstring

#Composer
RUN curl -sS https://getcomposer.org/installer | php \
      && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# xdebug
RUN pecl install xdebug \
      && docker-php-ext-enable xdebug

WORKDIR /var/www
FROM php:7.2.24-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y libicu-dev libpng-dev libzip-dev zlib1g-dev default-mysql-client curl gnupg wget zip unzip \
  && docker-php-ext-install zip intl gd mysqli pdo_mysql mbstring

#Composer
RUN curl -sS https://getcomposer.org/installer | php \
      && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# xdebug
RUN pecl install xdebug \
      && docker-php-ext-enable xdebug

WORKDIR /var/www
