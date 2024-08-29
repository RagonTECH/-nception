#!/bin/bash

# Çevre değişkenlerini .env dosyasından yükle
set -a
. /home/msaka/srcs/.env
set +a

# WordPress dizinine git
cd /var/www/html

# Var olan WordPress dosyalarını ve wp-config.php dosyasını sil
rm -rf /var/www/html/*
rm -f /var/www/html/wp-config.php

# WP-CLI'yi indir ve çalıştırılabilir yap
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# WordPress'i indir
./wp-cli.phar core download --allow-root

# wp-config.php dosyasını oluşturun
./wp-cli.phar config create \
    --dbname=$MYSQL_DATABASE \
    --dbuser=$MYSQL_USER \
    --dbpass=$MYSQL_PASSWORD \
    --dbhost=$MYSQL_HOSTNAME \
    --allow-root

# WordPress'i kur
./wp-cli.phar core install \
    --url=$DOMAIN_NAME \
    --title="$WP_TITLE" \
    --admin_user=$WP_ADMIN_USR \
    --admin_password=$WP_ADMIN_PWD \
    --admin_email=$WP_ADMIN_EMAIL \
    --allow-root

# PHP-FPM'i başlat
exec php-fpm7.3 -F
