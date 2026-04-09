#!/bin/sh
set -e

# Attendre que la DB soit prête
echo "Waiting for database..."
until php artisan db:monitor --max=10 2>/dev/null; do
    echo "Database not ready, retrying in 2s..."
    sleep 2
done

# Restaure le storage si vide
if [ -z "$(ls -A /var/www/storage 2>/dev/null)" ]; then
    echo "Initializing storage..."
    cp -r /var/www/storage-init/. /var/www/storage/
fi

# Optimisations Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

exec "$@"