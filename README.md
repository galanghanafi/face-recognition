<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About My Project
# Technology I`m Used
- [Laravel 9](https://laravel.com/)
- [Voyager](https://voyager.devdojo.com/)
- [daisyUI (cdn)](https://daisyui.com/)
- [Yajrabox](https://yajrabox.com/)
- [Face++ Api](https://www.faceplusplus.com/)

## Setup
How to clone my project
- clone my project
'git clone https://github.com/galanghanafi/face-recognition'
- setting .env file
change directory into working directory
'cd face-recognition'
copy **.env.example** to **.env**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=***your db***
DB_USERNAME=***your db username***
DB_PASSWORD=***your db password***
```

- installing dependecies
```
composer install
npm i
```
- last setup
```
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```
> migration and seeder comming ASAP 👍
- make user account
'php artisan voyager:admin your@email.com --create'
- Run the project
'php artisan serve'  
