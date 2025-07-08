FROM php:8.1-apache

# Устанавливаем системные зависимости и модули PHP
RUN apt-get update && apt-get install -y \
    tzdata \
    libzip-dev \
    zip \
    libicu-dev \
    libxslt-dev \
    libgd-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
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

ENV TZ=Asia/Krasnoyarsk
RUN apt-get update && apt-get install -y tzdata && \
    ln -snf /usr/share/zoneinfo/Asia/Krasnoyarsk /etc/localtime && \
    echo "Asia/Krasnoyarsk" > /etc/timezone

RUN echo -e '#!/bin/sh\nexit 0' > /usr/sbin/sendmail && chmod +x /usr/sbin/sendmail

# Настройки php.ini для Битрикс
RUN echo "date.timezone = Asia/Krasnoyarsk" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "opcache.revalidate_freq = 0" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "display_errors = On" >> /usr/local/etc/php/conf.d/bitrix.ini && \
    echo "max_input_vars = 10000" >> /usr/local/etc/php/conf.d/custom.ini && \
    echo "post_max_size = 64M" >> /usr/local/etc/php/conf.d/custom.ini && \
    echo "upload_max_filesize = 64M" >> /usr/local/etc/php/conf.d/custom.ini && \
    echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/bitrix.ini \
    echo "sendmail_path = /usr/sbin/sendmail -t" >> /usr/local/etc/php/conf.d/99-mailstub.ini

# Устанавливаем Composer (опционально)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Настраиваем Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf