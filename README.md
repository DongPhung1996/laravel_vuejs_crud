# laravel_vuejs_crud
Create page crud product using laravel and vue js

STEP 1: Creat project laravel:
- Install laravel 5.7:
 composer create-project --prefer-dist laravel/laravel blog "5.7.*"
- Install front end:
 npm install
- Create datatabase MySQL:
+ Create database name: laravelcrud
+ Edit file .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelcrud
DB_USERNAME=root
DB_PASSWORD=root
- the compiling assets using command line:
npm run watch

STEP 2: Install Vue dependency:
npm install vue-router vue-axios --save

STEP 3: Run project:
php artisan config:cache
php artisan serve
