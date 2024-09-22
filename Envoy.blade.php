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
cd /home/laravel/laravel-payhere
git pull origin main
@endtask

@task('install-dev-dependencies')
cd /home/laravel/laravel-payhere
composer install
npm install
@endtask

@task('install-prod-dependencies')
cd /home/laravel/laravel-payhere
composer install --optimize-autoloader --no-dev
@endtask

@task('maintenance-mode-on')
cd /home/laravel/laravel-payhere
php artisan down --secret=c2fBxu9p8o
@endtask

@task('optimize')
cd /home/laravel/laravel-payhere
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan icons:cache
@endtask

@task('fetch-fonts')
cd /home/laravel/laravel-payhere
php artisan google-fonts:fetch
@endtask

@task('build-assets')
cd /home/laravel/laravel-payhere
npm run build
@endtask

@task('migrate-database')
cd /home/laravel/laravel-payhere
php artisan migrate --force
@endtask

@task('reload-octane-server')
cd /home/laravel/laravel-payhere
php artisan octane:reload
@endtask

@task('restart-queue-workers')
cd /home/laravel/laravel-payhere
php artisan queue:restart
@endtask

@task('maintenance-mode-off')
cd /home/laravel/laravel-payhere
php artisan up
@endtask

@task('build-docs')
cd /home/laravel/laravel-payhere/docs
npm run docs:build
@endtask
