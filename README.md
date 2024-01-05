This Laravel Vue Js source code works with Docker.
To install this on your device ensure you have docker running on your Computer
1. Open the parent folder Laravel-Docker-Vue-ProfileUpdate in a terminal
2. Run this in terminal
   make setup
3. The cmd code will create a docker container for Phymyadmin, PHP and MYsql under Laravel-Docker-Vue-ProfileUpdate
4. Access the laravel container_name folder for artisan using
   make access_laravel
6. Run
   php artisan migrate
8. Add new terminal at the parent folder
9. Run the following command
    cd laravel-demo-app
    npm run dev
11. Go to http://127.0.0.1:9007/ to acces it
