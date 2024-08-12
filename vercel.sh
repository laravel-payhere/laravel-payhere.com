#!/bin/sh

# CREATE COMPOSER AUTH.JSON
composer config http-basic.satis.dasun.dev hello@dasun.dev $PAYHERE_LICENSE_KEY

# INSTALL COMPOSER DEPENDENCIES
php composer.phar install

# INSTALL NPM DEPENDENCIES
npm run build
