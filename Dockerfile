FROM php:8.1-apache

# Устанавливаем системные зависимости и модули PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    libicu-dev \
    libxslt-dev \
    libgd-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mysqli \
    zip \
    intl \
    xsl \
    gd \
    opcache

# Включаем mod_rewrite для Apache
RUN a2enmod rewrite

# Настройки php.ini для Битрикс
RUN echo "date.timezone = Europe/Moscow" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "opcache.revalidate_freq = 0" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "display_errors = On" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/bitrix.ini

# Устанавливаем Composer (опционально)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Настраиваем Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf