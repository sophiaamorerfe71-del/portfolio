FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libzip-dev libpng-dev libxml2-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd mbstring xml \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data storage bootstrap/cache

RUN a2dismod mpm_event mpm_worker 2>/dev/null || true \
    && a2enmod mpm_prefork rewrite

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' \
    /etc/apache2/sites-available/000-default.conf

EXPOSE 80