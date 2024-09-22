@servers(['web' => 'dasun'])

@story('deploy')
maintenance-mode-on
update-code
install-dev-dependencies
migrate-database
build-assets
build-docs
install-prod-dependencies
optimize
restart-queue-workers
maintenance-mode-off
@endstory

@task('update-code')
cd /home/laravel/laravel-payhere.com
git pull origin main
git submodule update --remote
@endtask

@task('install-dev-dependencies')
cd /home/laravel/laravel-payhere.com
composer install
npm install
@endtask

@task('install-prod-dependencies')
cd /home/laravel/laravel-payhere.com
composer install --optimize-autoloader --no-dev
@endtask

@task('maintenance-mode-on')
cd /home/laravel/laravel-payhere.com
php artisan down --secret=c2fBxu9p8o
@endtask

@task('optimize')
cd /home/laravel/laravel-payhere.com
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan icons:cache
@endtask

@task('build-assets')
cd /home/laravel/laravel-payhere.com
npm run build
@endtask

@task('migrate-database')
cd /home/laravel/laravel-payhere.com
php artisan migrate --force
@endtask

@task('restart-queue-workers')
cd /home/laravel/laravel-payhere.com
php artisan queue:restart
@endtask

@task('maintenance-mode-off')
cd /home/laravel/laravel-payhere.com
php artisan up
@endtask

@task('build-docs')
cd /home/laravel/laravel-payhere.com/docs
npm run build
@endtask
