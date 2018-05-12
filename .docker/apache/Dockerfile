FROM php:7.1.8-apache

ADD ./vhost.conf /etc/apache2/sites-available/default.conf

RUN chown -R www-data:www-data /var/www/ && a2enmod rewrite && a2ensite default

RUN apt-get update
RUN apt-get -y install apt-utils
RUN apt-get -y install git
RUN apt-get -y install mcrypt
RUN apt-get -y install zip
RUN apt-get -y install unzip
RUN apt-get -y install php-pclzip
RUN apt-get -y install libpq-dev curl
RUN apt-get -y install libjpeg-dev
RUN apt-get -y install libpng12-dev
RUN apt-get -y install libfreetype6-dev
RUN apt-get -y install libssl-dev
RUN apt-get -y install libmcrypt-dev
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN rm -rf /var/lib/apt/lists/*

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip

RUN curl --silent --show-error https://getcomposer.org/installer | php

WORKDIR /var/www/

VOLUME /var/www/

RUN service apache2 restart
