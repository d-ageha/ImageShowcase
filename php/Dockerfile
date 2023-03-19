FROM php:8.0-apache
WORKDIR /ImageShowcase
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite
RUN apt-get update && apt-get install git unzip -y && apt-get upgrade -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

