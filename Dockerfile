# Usa una imagen oficial de PHP como base
FROM php:8.1-apache

# Copia los archivos de la aplicación al directorio raíz de Apache
COPY . /var/www/html

# Exponer el puerto 80 para la aplicación PHP
EXPOSE 80
