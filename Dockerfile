FROM php:8.0-apache
RUN apt-get update && apt-get install -y --no-install-recommends netbase
RUN apt-get update && apt-get install -y whois
RUN docker-php-ext-install mysqli
