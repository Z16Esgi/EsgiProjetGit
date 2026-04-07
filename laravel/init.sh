#!/bin/sh
set -e

cd /var/www/laravel

# Installer les dépendances PHP si besoin
if [ -f composer.json ] && [ ! -d vendor ]; then
    composer install --no-interaction --prefer-dist
fi

# Installer les dépendances JS si besoin
if [ -f package.json ] && [ ! -d node_modules ]; then
    npm install
fi

# Builder les assets front si besoin
if [ -f package.json ]; then
    npm run build
fi

# Générer .env si absent
if [ ! -f .env ] && [ -f .env.example ]; then
    cp .env.example .env
fi

# Générer la clé Laravel si absente
if [ -f .env ] && ! grep -q '^APP_KEY=base64:' .env; then
    php artisan key:generate --force
fi

# Lancer les migrations
if [ -f artisan ]; then
    php artisan migrate --force || true
fi

exec php-fpm
