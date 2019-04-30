FROM php:7.3-fpm

ARG AGENT_UID=1000
RUN adduser --no-create-home -shell /bin/sh -u ${AGENT_UID} app-agent

COPY ./docker/dev/app/www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
WORKDIR /app

# Ignore Composer root warning
ENV COMPOSER_ALLOW_SUPERUSER 1

# Installing dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip
RUN docker-php-ext-install pdo_mysql
RUN mkdir -p /var/run/php-fpm
RUN chown app-agent:app-agent /var/run/php-fpm

# Installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
