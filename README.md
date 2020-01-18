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

