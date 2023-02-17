ARG phpVersion="fpm"
FROM php:${phpVersion}
LABEL maintainer="Alvaro Fimpel <afimpel@afimpel.com>"

ENV PHP_EXTRA_CONFIGURE_ARGS --enable-maintainer-zts
COPY php.ini /usr/local/etc/php/php.ini

RUN apt-get update  && apt-get install -y iputils-ping nmap git curl zip unzip apt-utils
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions intl gd curl soap sockets mysqli pdo pdo_mysql pdo_pgsql pdo_sqlsrv pgsql sqlsrv redis xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ARG user
ARG uid
# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Install redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
