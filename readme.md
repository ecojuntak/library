# Library App
A simple Laravel project for tutorial purpose. This project used to demo project on this [Laravel Blog Series](https://medium.com/easyread/laravel-series-belajar-laravel-dari-awal-yok-c21dc47863da)

## Prerequisite
- PHP 7.1.3+
- Composer
- MySQL 5.7.29

## Development Setup
### Installation
- Clone this project
- `cd library`
- `make install` to install the application
- `php artisan serve` to run the application
- Access `localhost:8000` on your browser to open the application

### Database Setup
- Create new database on your MySQL
- Set the database credential on `.env`
- `php artisan migrate` to generate all the database table
