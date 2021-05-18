<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# TodoList app

## Intro

First of all, this is my first time using laravel framework and docker (I have managed it, I hope).

- [x] The app retrieves JSON data from REST API "/todos" endpoint.
- [x] Here is HTML table where each row corresponds to one TODO (additionaly, there are informations about user ID, todo ID and information about TODO completion)
- [x] Speaking of error handling, when we start a new Laravel project, error and exception handling is already configured for you. The App\Exceptions\Handler class is where all exceptions thrown by your application are logged and then rendered to the user, (ref. to:https://laravel.com/docs/8.x/errors).
All we need to do is to make a custom view for any error or exception. In this project, that would be 404.blade.php which is inside path:

resources
- views
  - errors
    
- [x] Since I am newbie speaking about docker and "dockerizing" apps, there are images (this is a proper way to call it) for webserver and app itself. I'll give the instructions for running this app on docker.
- [x] Web application is running on PHP 7.4.19 version
- [x] HTTP request is established by Guzzle
- [x] Code is structured in line with the general MVC pattern, since Laravel framework provides us MVC pattern already.
- [x] I used one of the PHP formatters available in Visual Studio Code for formatting PHP code (It follows PSR-2 and Symfony PHP coding standards, I guess).
- [x] This project includes folder vendor (since I have excluded it in .gitignor file).
- [x] It's optional, but there is css code inside this app (I have questions about css files in Laravel, since it is deleted every time I put css/app.css inside public folder).

That's all about this app. I have learned a lot of things and I'm happy with that. It was fun to deal with this simple project, it provided me a lot of knowledge altough it's very simple :)
I hope I'll learn much more in the future.

## Running the app

Be sure you have docker installed on you PC.
First, we need to enter directory of the app, after that, run cmd.exe inside app folder.
To run this project on docker, enter following commands:

>docker-compose up --build
>
(This is a command for building PHP docker image and running containers)

Running a new laravel project requires running composer from app docker container.
To list container names, enter command:

>docker ps
>
After that, let's run our "app" container

>docker exec -it <docker container ID> bash
    
Now we are inside container, and run this command:
    
>ls -la
    
After that, install composer in case you don't have it installed:
    
>composer install
    
Just few steps more to run the app:
    
>docker compose down
    
>docker compose up
    
### That's it! TODOS app is running on http://localhost:8080/
