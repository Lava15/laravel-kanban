FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    postgresql-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apk add --no-cache --virtual .build-deps gcc g++ make \
    && docker-php-ext-install soap \
    && apk del .build-deps

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
CMD ["php-fpm"]

