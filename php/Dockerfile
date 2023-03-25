FROM php:8.0-apache
RUN chown -R www-data:www-data /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN a2enmod rewrite
RUN apt-get update && apt-get install git unzip nodejs npm -y && apt-get upgrade -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
