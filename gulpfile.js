const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy(
        'node_modules/moment/moment.js',
        'public/js'
    ).copy(
        'node_modules/startbootstrap-new-age/css/new-age.min.css',
        'resources/assets/css'
    ).copy(
        'node_modules/startbootstrap-new-age/js/new-age.min.js',
        'public/js'
    );

    mix.copy(
        'node_modules/startbootstrap-new-age/',
        'public/',
        false
    );

    mix.styles('new-age.min.css');

    mix.sass('app.scss')
       .webpack('app.js');
});
