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
        'node_modules/startbootstrap-new-age/',
        'public/',
        false
    );

    mix.styles('new-age.css','public/css/new-age.min.css');
    mix.styles('skin-blue.css','public/css/skin-blue.min.css');
    mix.styles('AdminLTE.css','public/css/AdminLTE.min.css');

    mix.sass('app.scss')
       .webpack('app.js');
});
