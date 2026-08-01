FROM php:8.2-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        zip \
        mbstring

RUN a2enmod rewrite

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

# Apache utilise le dossier public de Laravel
RUN sed -i 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf

# Création SQLite
RUN touch database/database.sqlite

# Correction permissions Laravel
RUN mkdir -p storage/logs bootstrap/cache

RUN chown -R www-data:www-data /var/www/html

RUN chmod -R 777 storage bootstrap/cache database

# Nettoyage Laravel
RUN php artisan config:clear || true
RUN php artisan cache:clear || true

EXPOSE 80

CMD ["apache2-foreground"]