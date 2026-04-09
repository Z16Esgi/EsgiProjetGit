FROM nginx:alpine

# Copie la config nginx
COPY docker/production/nginx/nginx.conf /etc/nginx/nginx.conf

# Copie les assets publics (optionnel, car montés en volume en général)
# COPY ./laravel/public /var/www/laravel/public

WORKDIR /var/www/laravel

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]