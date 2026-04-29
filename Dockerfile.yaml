FROM php:8.2-apache

# Install extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd mbstring xml

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Apache config
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

EXPOSE 80