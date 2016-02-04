# Laravel App Structure

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
    │   │   ├── Kernel.php
    │   │   └── routes.php
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
    │   │       └── vendors.scss
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
    ├── .env.example
    ├── .gitattributes
    ├── .gitignore
    ├── .php_cs
    ├── README.md
    ├── artisan
    ├── bower.json
    ├── composer.json
    ├── composer.lock
    ├── gulpfile.js
    ├── package.json
    ├── phpunit.xml
    └── server.php
