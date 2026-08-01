FROM php:8.2-apache

WORKDIR /var/www/html

# Installation des dépendances PHP nécessaires à Laravel
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

# Activation du module Apache Rewrite pour Laravel
RUN a2enmod rewrite

# Copier le projet Laravel
COPY . .

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation des dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Configuration Apache pour pointer vers le dossier public de Laravel
RUN sed -i 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf

# Création du fichier SQLite s'il n'existe pas
# RUN touch database/database.sqlite

# Permissions Laravel
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache \
    database

RUN chmod -R 775 \
    storage \
    bootstrap/cache \
    database

# Nettoyage et optimisation Laravel
RUN php artisan config:clear || true
RUN php artisan cache:clear || true
RUN php artisan route:clear || true
RUN php artisan view:clear || true
RUN php artisan migrate --force || true
# Port utilisé par Render
EXPOSE 80

# Démarrage Apache
CMD ["apache2-foreground"]