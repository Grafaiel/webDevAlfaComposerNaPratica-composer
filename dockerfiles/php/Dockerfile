FROM php:8.0-apache

RUN apt-get -y update
RUN apt-get install -y --no-install-recommends apt-utils

# instalando git, zip e unzip no sistema operacional
RUN apt-get -y install git libzip-dev unzip

# instalando php-ext-zip e composer (gerenciador de pacotes)
RUN docker-php-ext-install zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# habilitando mod_rewrite para reescrita de url
RUN a2enmod rewrite

