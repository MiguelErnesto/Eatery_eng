Eatery.Cafe README.MD

FEATURES
- php 8.2+ (Railway/Railpack requires 8.2 or newer)
- laravel 9


INSTALLING:

1.- Clone the project

2.- Change to local project's directory

3.- Install dependencies:

composer install

4.- Start the standalone MariaDB container (reuses local image mariadb:10.2; port 3307 so it does not collide with other containers):

docker compose up -d

5.- Database access settings

copy .env.example and rename to .env

Configure your database settings in .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=eatery
DB_USERNAME=root
DB_PASSWORD=secret

6.- Generate de key project:

php artisan key:generate

7.- Migrate and execute the seeders

php artisan migrate --seed

8.- Initialize your local web server

9.- Accessing to Admin Panel:
http://yourdomain/login

user:	  admin@website.com
password: 12345678

You may change your name, email and password in dashboard.

10.- Put Url to front's previews on admin dashboard
(Example: http://yourdomain/)


Note: Maybe you must use http://yourdomain/public instead http://yourdomain/ depending your web server.

Railway/Railpack: PHP 8.2+ is required. This repo sets "php": "^8.2" in composer.json so the build does not request 8.0.2.


Enjoy it!

