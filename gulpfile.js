var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass([
        'app.scss'
    ], 'public/assets/css/app.css'
    , null, true);

    mix.scripts([
        'angular/module.js',
        'angular/bootstrap.js',
    ], 'public/assets/js/app.js');

    mix.version([
        'assets/css/app.css',
        'assets/js/app.js'
    ]);
});
