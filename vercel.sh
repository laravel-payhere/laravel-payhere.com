# INSTALL PHP
yum install -y amazon-linux-extras
amazon-linux-extras enable php8.2
yum install php

# MIGRATE THE DATABASE
php artisan migrate
