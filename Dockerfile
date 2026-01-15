FROM php:8.2-apache AS builder
RUN docker-php-ext-install mysqli pdo_mysql

FROM php:8.2-apache
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/etc/php/conf.d/ /usr/local/etc/php/conf.d/
COPY src/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html