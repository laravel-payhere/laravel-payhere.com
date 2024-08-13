#!/bin/sh

# Install PHP & WGET
yum install -y amazon-linux-extras
amazon-linux-extras enable php8.1
yum clean metadata
yum install php
yum install wget

php artisan filament:assets
