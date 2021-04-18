FROM php:8.0-apache
RUN apt-get update && apt-get install -y --no-install-recommends netbase
RUN apt-get update && apt-get install -y whois
RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
WORKDIR /var/App
USER $user

