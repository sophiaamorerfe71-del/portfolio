FROM php:8.2-cli

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

EXPOSE 8000

CMD php -d error_reporting=E_ALL^E_DEPRECATED -d display_errors=Off artisan serve --host=0.0.0.0 --port=