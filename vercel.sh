# INSTALL AMAZON LINUX EXTRAS
echo "Installing Amazon Linux Extras..."
yum install -y amazon-linux-extras

# INSTALL PHP
echo "Enabling PHP 8.2 and installing required PHP packages..."
amazon-linux-extras enable php8.2
yum clean metadata
yum install php php-{ctype,curl,dom,fileinfo,filter,hash,mbstring,openssl,pcre,pdo,session,tokenizer,xml,intl,pgsql}

# INSTALL WGET
yum install wget

# INSTALL POSTGRESQL
echo "Enabling PostgreSQL 14 and installing PostgreSQL..."
amazon-linux-extras enable postgresql14
yum clean metadata
yum install postgresql-server

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

php composer-setup.php --quiet
rm composer-setup.php

# CREATE COMPOSER AUTH.JSON
php composer.phar config http-basic.satis.dasun.dev hello@dasun.dev $LARAVEL_PAYHERE_LICENSE_KEY

# INSTALL COMPOSER DEPENDENCIES
php composer.phar install

# MIGRATE THE DATABASE
echo "Running database migrations..."
php artisan migrate --force

# CLEAR CACHE
echo "Clear application cache..."
php artisan optimize:clear

# BUILD ASSETS
echo "Building assets..."
npm run build
