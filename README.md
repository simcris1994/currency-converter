# currency-converter
Simple application written in Laravel that allows currency conversion. Uses data from Exchange Rates API.


In order to run the application follow these steps:

1. Clone the repository

2. Run "composer install"

3. In the root folder, create a file named ".env" and paste the following text: "APP_KEY="

4. Run "php artisan key:generate". This will create an application key and paste in into the .env file.

5. Run "php artisan config:cache"

6. Run "php artisan serve"

7. Go to "http://localhost:8000"
