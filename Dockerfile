# docker build --tag eve-api-php .
# docker run -it --mount type=bind,source="$(pwd)",target=/app --workdir /app eve-api-php /bin/sh

FROM php:8.4-alpine
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
