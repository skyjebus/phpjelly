FROM php:8.1.3RC1-apache-buster

# Prepare apt
RUN apt-get install curl
RUN curl -sLO https://ftp.debian.org/debian/pool/main/s/ssl-cert/ssl-cert_1.1.2_all.deb && dpkg -i ssl-cert_1.1.2_all.deb
RUN apt-get update -y && apt-get install -f

RUN a2enmod headers
RUN a2enmod rewrite

# Setup Apache2 mod_ssl
RUN a2enmod ssl

# Setup Apache2 HTTPS env
RUN a2ensite default-ssl.conf

# Work directory
WORKDIR /var/www/html

RUN service apache2 restart

EXPOSE 443