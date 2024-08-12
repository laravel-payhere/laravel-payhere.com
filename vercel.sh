#!/bin/sh

# Install PHP & WGET
yum install -y amazon-linux-extras
amazon-linux-extras enable php8.2
yum clean metadata
yum install php php-{common,curl,mbstring,gd,gettext,bcmath,json,xml,fpm,intl,zip,imap}
yum install wget

# INSTALL COMPOSER
EXPECTED_CHECKSUM="$(wget -q -O - https://composer.github.io/installer.sig)"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_CHECKSUM" != "$ACTUAL_CHECKSUM" ]
then
    >&2 echo 'ERROR: Invalid installer checksum'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --install-dir=/usr/local/bin --filename=composer --quite
rm composer-setup.php

# CREATE COMPOSER AUTH.JSON
echo "Creating the composer auth.json"
composer config http-basic.satis.dasun.dev hello@dasun.dev $LARAVEL_PAYHERE_LICENSE_KEY

# INSTALL COMPOSER DEPENDENCIES
composer require dasundev/laravel-payhere:^1.0.0@beta
composer install

# INSTALL NPM DEPENDENCIES
npm run build
