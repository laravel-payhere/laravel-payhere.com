@servers(['web' => 'vps'])

@story('deploy')
maintenance-mode-on
update-code
install-dev-dependencies
migrate-database
build-assets
build-docs
install-prod-dependencies
generate-sitemap
fetch-google-fonts
optimize
restart-queue-workers
maintenance-mode-off
@endstory

@task('update-code')
cd /home/forge/laravel-payhere.com
git pull origin main
git submodule update --remote
@endtask

@task('install-dev-dependencies')
cd /home/forge/laravel-payhere.com
composer install
npm install
@endtask

@task('install-prod-dependencies')
cd /home/forge/laravel-payhere.com
composer install --optimize-autoloader --no-dev
@endtask

@task('maintenance-mode-on')
cd /home/forge/laravel-payhere.com
php artisan down --secret=c2fBxu9p8o
@endtask

@task('optimize')
cd /home/forge/laravel-payhere.com
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan icons:cache
@endtask

@task('build-assets')
cd /home/forge/laravel-payhere.com
npm run build
@endtask

@task('migrate-database')
cd /home/forge/laravel-payhere.com
php artisan migrate --force
@endtask

@task('restart-queue-workers')
cd /home/forge/laravel-payhere.com
php artisan queue:restart
@endtask

@task('maintenance-mode-off')
cd /home/forge/laravel-payhere.com
php artisan up
@endtask

@task('build-docs')
cd /home/forge/laravel-payhere.com/docs
npm run build
@endtask

@task('generate-sitemap')
cd /home/forge/laravel-payhere.com
php artisan sitemap:generate
@endtask

@task('fetch-google-fonts')
cd /home/forge/laravel-payhere.com
php artisan google-fonts:fetch
@endtask
