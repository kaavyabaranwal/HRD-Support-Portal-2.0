<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the Project

Bio-Data and Training management system is a software application built using Laravel and MySQL that helps organizations manage their employee details and training programs. It is designed to streamline the process of planning, delivering, and evaluating training activities.
#### Features :-
- Register and Login
- Password Encryption using MD5
- Easily create, read, update and delete user details.
- Create new trainings and view them.



## Getting Started
- Download the latest version of XAMPP from [Apache Friends](https://www.apachefriends.org/).
- Then install [Composer](https://getcomposer.org/download/) on your local machine. Make sure you install Composer in the `xampp` folder created in the above step.
- Refer to [this guide](https://www.thecodedeveloper.com/install-composer-windows-xampp/) for a detailed tutorial on how to set up XAMPP with Composer.
- Create a Laravel project in the `htdocs` folder inside the `xampp` folder by running the command inside `htdocs` folder : `composer create-project laravel/laravel hrd-app`
- Next, download the project from the repository. Copy the following folder - `app` `bootstrap` `database` `public` `resources` `routes` and replace them in `hrd-app`
- Open the link `http://localhost/phpmyadmin/`.
- Create a new database and import the file `resources > query > cwc.sql`. You will see some sample data in the database you just created.
- Now open the `.env` file and make the changes in your connection variables.![image](https://github.com/kaavyabaranwal/HRD-Support-Portal-2.0/assets/99530509/0ec89e8b-9b84-48e3-b0bc-5ac4822a306f)

- Open a terminal inside the project folder `hrd-app`.
- Run the command `php artisan serve` to start Laravel's local development server. Click on the link displayed in the terminal to view the project in your browser
- Either create a new user or use `sample@user` and `user` as sample login.

