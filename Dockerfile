FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    git \
    zip
RUN docker-php-ext-install intl
RUN docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --optimize-autoloader --no-dev

CMD php artisan serve --host=0.0.0.0 --port=$PORT