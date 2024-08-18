# INSTALL AMAZON LINUX EXTRAS
echo "Installing Amazon Linux Extras..."
yum install -y amazon-linux-extras

# INSTALL PHP
echo "Enabling PHP 8.2 and installing required PHP packages..."
amazon-linux-extras enable php8.2
yum clean metadata
yum install php php-{ctype,curl,dom,fileinfo,filter,hash,mbstring,openssl,pcre,pdo,session,tokenizer,xml,pgsql}

# INSTALL POSTGRESQL
echo "Enabling PostgreSQL 14 and installing PostgreSQL..."
amazon-linux-extras enable postgresql14
yum clean metadata
yum install postgresql-server

# OPTIMIZE
echo "Clear cache and optimize..."
php artisan optimize:clear && php artisan optimize

# MIGRATE THE DATABASE
echo "Running database migrations..."
php artisan migrate --force

# BUILD ASSETS
echo "Building assets..."
npm run build
