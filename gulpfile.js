var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass([
        'vendors.scss'
    ], 'public/assets/css/app.css');

    mix.scripts([
        //
    ], 'public/assets/js/app.js');

    mix.version([
        'assets/css/app.css',
        'assets/js/app.js'
    ]);
});
