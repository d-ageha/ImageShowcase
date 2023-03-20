# ImageShowcase
A laravel based project to showcase your images.


## Environmental variables

Set following variables in .env:
* MYSQL_ROOT_PASSWORD
* MYSQL_USER
* MYSQL_PASSWORD

----

## Install with Docker

### Prerequisites

* PHP 7 >
* Composer 9 >
* Docker (optional)

### Instraction

Run following commands in the project root directory:

```
docker-compose build
cd php/laravel
composer install
php artisan key:generate
docker-compose up
```

Then, you can access ImageShowcase on `localhost:8000`.

----

## Install without Docker

### Prerequisites

* PHP 7 >
* Apache ?
* MySQL ?
* Composer 9 >

### Instraction

Clone this repository into Apache document root directory (/var/www/html for Linux).

Run following commands in the project root directory:
```
cd php/laravel
composer install
php artisan key:generate
```
Then, you can access ImageShowcase on `localhost/ImageShowcase` (URL depends on your Apache setting).
