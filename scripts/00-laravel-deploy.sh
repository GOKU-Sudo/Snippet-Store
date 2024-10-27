#!/usr/bin/env bash

set -e

echo "Running composer install..."
composer install --no-dev --optimize-autoloader --working-dir=/var/www/html

echo "Generating application key..."
php artisan key:generate --force

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache


echo "Deployment completed successfully."