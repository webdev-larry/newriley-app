#!/bin/bash

# Update package list and install dependencies
apt-get update && apt-get install -y \
    libssl1.0.0 \
    libssl-dev

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Generate application key
php artisan key:generate

# Ensure correct permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
