# Web Based Face Recognition
This project is a simple web-based face recognition built with Laravel and Face++ API. It is a powerful tool for recognizing individual faces from an image.
 
# Technology I`m Used
- [Laravel 9](https://laravel.com/)
- [Voyager](https://voyager.devdojo.com/)
- [daisyUI (cdn)](https://daisyui.com/)
- [Yajrabox](https://yajrabox.com/)
- [Face++ Api](https://www.faceplusplus.com/)

## Setup
How to clone my project
- clone my project
'$ git clone https://github.com/galanghanafi/face-recognition'
- setting .env file
change directory into working directory
'$ cd face-recognition'
copy **.env.example** to **.env**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=***your db***
DB_USERNAME=***your db username***
DB_PASSWORD=***your db password***

FACEPLUS_API="https://api-us.faceplusplus.com/facepp/v3/"
FACEPLUS_API_KEY="Your Face++ API Key"
FACEPLUS_API_SECRET="Your Face++ API Secret"
```

- installing dependecies
```
composer install
npm i
```
- last setup
```
$ php artisan key:generate
$ php artisan storage:link
$ php artisan migrate --seed
```
> migration and seeder comming ASAP 👍
- make user account
'$ php artisan voyager:admin your@email.com --create'
- Run the project
'$ php artisan serve'  
