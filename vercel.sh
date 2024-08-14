# INSTALL PHP
yum install -y amazon-linux-extras
amazon-linux-extras enable php8.2
yum clean
yum install php php-{ctype,curl,dom,fileinfo,filter,hash,mbstring,openssl,pcre,pdo,session,tokenizer,xml}

# MIGRATE THE DATABASE
php artisan migrate

# BUILD ASSETS
npm run build
