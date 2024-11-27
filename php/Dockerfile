FROM php:7.4-apache

RUN docker-php-ext-install mysqli

COPY apache.conf /etc/apache2/sites-available/000-default.conf

RUN a2ensite 000-default.conf && a2enmod rewrite && service apache2 restart