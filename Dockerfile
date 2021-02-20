FROM php:8.0.2-cli
COPY . /app
WORKDIR /app
CMD [ "php", "./app/hello.php" ]

