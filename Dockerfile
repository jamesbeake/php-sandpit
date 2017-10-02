FROM php:5.6

WORKDIR /usr/src/app

COPY . .

CMD ["php", "--version"]