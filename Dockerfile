FROM php:7.2-zts

RUN pecl install parallel
COPY config/php.ini /usr/local/etc/php/
COPY . /app
WORKDIR /app
CMD [ "php", "./app/parallel.php" ]

