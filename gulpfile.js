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
    mix.styles('font-awesome.css','public/css/font-awesome.min.css');
    mix.styles('ionicons.css','public/css/ionicons.min.css');
    mix.styles('fullcalendar.css','public/css/fullcalendar.min.css');
    mix.styles('Catamaran.css','public/css/Catamaran.min.css');
    mix.styles('Lato.css','public/css/Lato.min.css');
    mix.styles('Muli.css','public/css/Muli.min.css');
    mix.styles('bootstrap.css','public/css/bootstrap.min.css');


    mix.sass('app.scss');
    mix.webpack('app.js');
    mix.webpack('bootstrap.js');
    mix.webpack('html5shiv.js');
    mix.webpack('respond.js');
});
