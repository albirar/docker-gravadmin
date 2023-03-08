FROM alpine:3.17

LABEL Mantainer="Octavi Fornés <ofornes@albirar.cat>"
LABEL Description="Grav CMS with nginx+php"

# Setup document root
WORKDIR /var/www/html

USER root
RUN addgroup -g 1000 nginx
RUN adduser -u 1000 -G nginx -D -H nginx

RUN apk add --no-cache \
  curl \
  nginx \
  php81 \
  php81-ctype \
  php81-curl \
  php81-dom \
  php81-fpm \
  php81-gd \
  php81-intl \
  php81-mbstring \
  php81-mysqli \
  php81-opcache \
  php81-openssl \
  php81-phar \
  php81-session \
  php81-xml \
  php81-xmlreader \
  php81-zip \
  php81-simplexml \
  php81-pecl-apcu \
  php81-opcache \
  php81-pecl-yaml \
  supervisor

## NGINX
COPY assets/configs/nginx-conf/nginx.conf /etc/nginx/nginx.conf
COPY assets/configs/nginx-conf/default.conf /etc/nginx/conf.d/default.conf

## FPM-PHP
COPY assets/configs/fpm-pool.conf /etc/php81/php-fpm.d/www.conf
COPY assets/configs/php.ini /etc/php81/conf.d/custom.ini

## Supervisord
RUN mkdir /etc/supervisor.d/
COPY assets/configs/supervisord.conf /etc/supervisor.d/supervisord.conf


# Expose the port nginx is reachable on
EXPOSE 8080

RUN chown -R nginx:nginx /var/www/html /run /var/lib/nginx /var/log/nginx

USER nginx

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor.d/supervisord.conf"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping
