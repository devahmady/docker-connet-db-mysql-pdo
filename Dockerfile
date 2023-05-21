FROM php:8.0-apache
COPY ./src/index.php /var/www/html
# RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

