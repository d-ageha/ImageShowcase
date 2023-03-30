FROM php:8.0-apache

ARG UID GID
RUN useradd -ms /bin/bash user -u $UID
RUN chown -R www-data:www-data /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN a2enmod rewrite
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - 
RUN apt-get update && apt-get install git unzip nodejs -y && apt-get upgrade -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# The environment valiables are removed everytime you RUN bash.
# nvm is essentially a set of environment valiables,
# so you have to use nvm BEFORE exiting the process.
