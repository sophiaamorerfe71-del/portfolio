FROM php:7.4-cli

RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libzip-dev libpng-dev libxml2-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd mbstring xml \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs --no-scripts
RUN chown -R www-data:www-data storage bootstrap/cache
RUN php artisan storage:link --no-interaction 2>/dev/null || true

EXPOSE 80

CMD ["sh", "-c", "php artisan config:clear && php artisan serve --host=0.0.0.0 --port=80"]