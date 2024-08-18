# INSTALL AMAZON LINUX EXTRAS
yum install -y amazon-linux-extras

# INSTALL PHP
amazon-linux-extras enable php8.2
yum clean metadata
yum install php php-{ctype,curl,dom,fileinfo,filter,hash,mbstring,openssl,pcre,pdo,session,tokenizer,xml,sqlite3}

# INSTALL POSTGRESQL
amazon-linux-extras enable postgresql14
yum clean metadata
yum install postgresql postgresql-server

# MIGRATE THE DATABASE
php artisan migrate --force

# BUILD ASSETS
npm run build
