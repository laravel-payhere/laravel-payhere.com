#!/bin/sh

# Install PHP & WGET
yum install -y amazon-linux-extras
amazon-linux-extras enable php8.2
yum clean metadata
yum install php php-{common,curl,mbstring,gd,gettext,bcmath,json,xml,fpm,intl,zip,imap}
yum install wget

php artisan filament:assets

npm run build
