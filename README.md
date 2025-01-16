Technical Stack
    
    Backend Framework: Laravel 10
    Admin Dashboard: Filament Admin Panel
    Database: MySQL
    Frontend: Blade templates
    Caching: Laravel's File Cache

Installation and Setup
    
    Prerequisites
        PHP >= 8.1
        Composer
        MySQL or SQLite

Local Development Setup
    
    git clone <repository_url>
    cd restaurant-menu-system

Install dependencies:
    
    composer install

Create a .env file:
    cp .env.example .env

Set up the database

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=restaurant_menu
    DB_USERNAME=root
    DB_PASSWORD=

run commands:
    php artisan migrate --seed

Start the development server:
    php artisan serve

Access the application:
    Admin Dashboard: http://localhost:8000/admin

Credentials:

    Username: admin@gmail.com
    Password: password123
    Frontend: http://localhost:8000

Live Demo

Frontend: 
Admin Dashboard: 
