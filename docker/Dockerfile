FROM php:7.2-apache

ADD src/vamshop-demo.zip /
ADD vamshop.key /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev unzip vim less && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install zip && \
    /usr/sbin/a2enmod rewrite

RUN unzip /vamshop-demo.zip -d /var/www/html/ && \
    chown -R www-data.www-data /var/www/html

VOLUME ["/var/www/html"]

COPY docker-entrypoint.sh /usr/local/bin/

ENTRYPOINT ["docker-entrypoint.sh"]
