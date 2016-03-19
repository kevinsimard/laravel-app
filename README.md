# Laravel Application Structure

## Code Structure

    ├── app
    │   ├── Console
    │   │   └── Kernel.php
    │   ├── Exceptions
    │   │   └── Handler.php
    │   ├── Http
    │   │   ├── Controllers
    │   │   │   └── BaseController.php
    │   │   ├── Middleware
    │   │   │   ├── EncryptCookies.php
    │   │   │   └── VerifyCsrfToken.php
    │   │   ├── Requests
    │   │   │   └── BaseRequest.php
    │   │   └── Kernel.php
    │   ├── Jobs
    │   │   └── BaseJob.php
    │   ├── Modules
    │   │   └── Auth
    │   │       ├── Entities
    │   │       │   └── User.php
    │   │       ├── Http
    │   │       │   ├── Controllers
    │   │       │   │   ├── AuthController.php
    │   │       │   │   └── PasswordController.php
    │   │       │   └── Middleware
    │   │       │       ├── Authenticate.php
    │   │       │       └── RedirectIfAuthenticated.php
    │   │       └── Providers
    │   │           └── AuthServiceProvider.php
    │   └── Providers
    │       ├── EventServiceProvider.php
    │       └── RouteServiceProvider.php
    ├── bootstrap
    │   ├── cache
    │   │   └── .gitignore
    │   ├── app.php
    │   └── autoload.php
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── compile.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── services.php
    │   ├── session.php
    │   └── view.php
    ├── database
    │   ├── factories
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 2015_10_12_000000_create_user_table.php
    │   │   └── 2015_10_12_100000_create_password_reset_table.php
    │   ├── seeds
    │   │   └── DatabaseSeeder.php
    │   └── .gitignore
    ├── public
    │   ├── assets
    │   │   └── .gitignore
    │   ├── build
    │   │   └── .gitignore
    │   ├── .htaccess
    │   ├── favicon.ico
    │   ├── index.php
    │   └── robots.txt
    ├── resources
    │   ├── assets
    │   │   ├── js
    │   │   │   └── angular
    │   │   │       ├── controllers
    │   │   │       │   └── .gitkeep
    │   │   │       ├── bootstrap.js
    │   │   │       └── module.js
    │   │   └── sass
    │   │       ├── _vendors.scss
    │   │       └── app.scss
    │   ├── lang
    │   │   └── en
    │   │       ├── auth.php
    │   │       ├── pagination.php
    │   │       ├── passwords.php
    │   │       └── validation.php
    │   └── views
    │       ├── errors
    │       │   └── .gitkeep
    │       └── vendor
    │           └── .gitkeep
    ├── storage
    │   ├── app
    │   │   ├── public
    │   │   │   └── .gitignore
    │   │   └── .gitignore
    │   ├── framework
    │   │   ├── cache
    │   │   │   └── .gitignore
    │   │   ├── sessions
    │   │   │   └── .gitignore
    │   │   ├── views
    │   │   │   └── .gitignore
    │   │   └── .gitignore
    │   └── logs
    │       └── .gitignore
    ├── tests
    │   └── TestCase.php
    ├── .editorconfig
    ├── .env.example
    ├── .gitattributes
    ├── .gitignore
    ├── .php_cs
    ├── LICENSE.txt
    ├── README.md
    ├── artisan
    ├── composer.json
    ├── composer.lock
    ├── gulpfile.js
    ├── package.json
    ├── phpunit.xml
    └── server.php

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
