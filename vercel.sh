# INSTALL PHP
yum install -y amazon-linux-extras
amazon-linux-extras enable php8.2
yum clean metadata
yum install php php-{ctype,curl,dom,fileinfo,filter,hash,mbstring,openssl,pcre,pdo,session,tokenizer,xml,sqlite3}

# MIGRATE THE DATABASE
php artisan migrate --force

# BUILD ASSETS
npm run build
