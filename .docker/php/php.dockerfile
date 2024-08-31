FROM php:8.3-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
RUN docker-php-ext-install pdo pdo_pgsql
CMD ["php-fpm"] 


