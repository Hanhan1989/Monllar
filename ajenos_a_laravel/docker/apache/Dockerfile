FROM php:7.3.0-apache

RUN apt-get update && \
    apt-get install -y \
        git \
        wget \
        zip

# Instalar composer
RUN cd /tmp && curl --silent --show-error https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Instalar extensiones de php necesarias para Laravel 5.6.2.0
RUN apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libpcre3-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install pdo_mysql


# Instalar xdebug. Todo: cambiar a la version estable cuando salga la release de xdebug para php >=7.3
RUN cd /tmp \
    && curl -L http://xdebug.org/files/xdebug-2.7.0beta1.tgz > xdebug.tgz && tar -xvzf xdebug.tgz && cd xdebug-2.7.0beta1 \
    && phpize \
    && ./configure && make \
    && cp ./modules/xdebug.so /usr/local/lib/php/extensions/xdebug.so

# Poner los ejecutables del composer como globales

RUN echo export PATH="$PATH:/var/www/html/vendor/bin" >> ~/.bashrc

# Activar opciones de apache
RUN a2enmod rewrite

WORKDIR /var/www/html

EXPOSE 80 9000