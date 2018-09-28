FROM php:5.6.38-fpm
RUN mkdir -p /data/www/test
ADD . /data/www/test
EXPOSE 9000
CMD ["php-fpm"]
