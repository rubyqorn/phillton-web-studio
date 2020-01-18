# Technologies stack

- HTML/CSS
- Bootstrap 4
- Javascript
- PHP
- MySQL

Phillton - this is a web application which help to process orders faster and quality.
Link which will redirect you to the main page of this application:

I think will be better to look at this [Phillton - web studio](http://phillton.000webhostapp.com)

# Directories

The first and main directory is `app/`, there contains core of this application, classes which responsible for authentification, models which handle business logic, configuration files and controllers classes.

### app/auth/

Here contains `interfaces/` directory and classes which responsible for authentification in application. `FieldChecker.php` class set methods which validate fields by method, like `checkEmailField` or `checkPhoneField`. And `Validator.php` is abstract class which set field checker
for validate fields.

### app/config/

There we have a configuration file named `app.php`. This is access point where contains all configuration of this web application.

### app/controllers/

Here contains all controllers classes which handle http requests, show pages and call models with business logic. All classes extends from parent class `Controller` which placed into `app/core/` directory.

### app/core

This is a core of application. Here contains main classes which responsible for all process in this application. `Controller.php` class we need for controllers which will be extends from this class. Its contains class which responsible for viewing in application. And when we will need to expand our application in terms of functionality we can pass needed classes. `Database.php` class, it's just a class which responsible for connection with database in our application. `Model.php` class also like controller can expand own functionality and is abstraction below database connection. `Paginator.php`,
the name of this class telling itself for itself. This class responsible for pagination. `Route.php`
this is router classes which give us a site when we write request in browser. `View.php` class which 
responsible for templates in our application without it we would just look at white background.

### app/models

There contains classes which responsible for business logic in application. Here contains database manipulations, form handling and etc...

The second main directory is `public/`. Here contains all css styles, javascript code, images and
configuration files. This is the main access point. The main file `index.php` require `app/config/app.php` and extends all configurations from this file.

The third and finall directory is `views/` where contains all templates of this application. 
