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

### Working Process
- [Simple CRUD Application](https://github.com/kaavyabaranwal/CRUD-in-PHP).
- [HRD support portal 1.0 - PHP Version](https://github.com/kaavyabaranwal/HRD-Support-Portal-1.0/)

### Features and Interfaces

1. Login Page
   - Login with the provided user id and password
   - SHA 256 Password hashing.
     ![image](https://github.com/kaavyabaranwal/HRD-Support-Portal-1.0/assets/99530509/697c3f6d-1c41-43a3-b5ea-2bee36c5a877)


2. Employee page
   - All the information about the employee is taken here. There are 3 sub forms- Personal details, Educational details & Professional details.
   - Logout through the dropdown in the top right corner
    ![image](https://github.com/kaavyabaranwal/HRD-Support-Portal-1.0/assets/99530509/8f5f2f62-5258-4975-a604-6c043ac14619)



3. Users Page
   - All the users can be viewed here.
   - Update and delete options are present on this page.
     ![image](https://github.com/kaavyabaranwal/HRD-Support-Portal-1.0/assets/99530509/c9e4eabe-9759-4130-989c-06536d40580f)


4. Add Training Page
   - New Trainings can be addded here.
    ![image](https://github.com/kaavyabaranwal/HRD-Support-Portal-1.0/assets/99530509/2d572409-d51e-49b6-b879-ffa53032fefc)
5. View Training Page
   - All the trainings posted can be viewed here.
   - Update and delete options for trainings are present on this page.
     ![image](https://github.com/kaavyabaranwal/HRD-Support-Portal-1.0/assets/99530509/8cd7e8bf-86fb-42b0-86f0-7f191acd6328)

## Need help?

Feel free to contact with me on [LinkedIn](https://www.linkedin.com/in/kaavya-baranwal/) or [Telegram](https://t.me/kaavya_baranwal)
