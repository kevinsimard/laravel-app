var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass([
        'vendors.scss'
    ], 'public/assets/css/app.css');

    mix.scripts([
        //
    ], 'public/assets/js/app.js');
});
