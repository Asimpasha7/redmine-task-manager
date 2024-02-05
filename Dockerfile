FROM php:7.4-fpm

WORKDIR /app

RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        unzip \
    && docker-php-ext-install zip pdo_mysql

COPY . .

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
