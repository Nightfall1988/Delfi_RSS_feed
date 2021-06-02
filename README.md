<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
# Delfi RSS Feed

Delfi RSS feed is an app that lets you get and update latest news from different categories of Delfi.

## Installation

To install, you need to enter these commands:

```bash
composer install
```
Copy the example env file and make the required configuration changes in the .env file. The database name should be "CloudCredit"

```bash
cp .env.example .env
```
Or just manually create the .env file and copy .env.example content there.

Generate a new application key

```bash
php artisan key:generate
```
Run the database migrations (check the database connection in .env before migrating to be "CloudCredit")

```bash
php artisan migrate
```
Start the local development server
```bash
php artisan serve
```
