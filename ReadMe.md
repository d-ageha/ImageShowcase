# ImageShowcase

A laravel based project to showcase your images.


## Install with Docker

### Prerequisites

* Docker

### Instraction

First, rename `.env.example` in the project root directory and `php/laravel` to `.env`, 
then edit the contents according to your liking.

Then, run following commands in the project root directory:

```
docker-compose build
docker-compose up -d

cd php/laravel
composer install
docker exec -w /var/www/html/laravel ImageShowcase php artisan key:generate
docker exec -w /var/www/html/laravel ImageShowcase php artisan migrate
```

You can access ImageShowcase on `localhost:8000`.

----

## Install without Docker

### Prerequisites

* PHP 7 >
* Apache ?
* MySQL ?
* Composer 9 >

### Instraction

Clone this repository into Apache document root directory (/var/www/html for Linux).

Rename `.env.example` in the project root directory and `php/laravel` to `.env`,
then edit the content according to your liking.

Then, run following commands in the project root directory:

```
cd php/laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

You can access ImageShowcase on `localhost/ImageShowcase` (URL depends on your Apache setting).

## About Migration

I would rewrite migraton files during development (at least before the first stable release).

I think this affects nobody, but if you are already running an older version of ImageShowcase and want to 
update to a newer version, then you might run into trouble.
