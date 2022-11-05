const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');

mix.styles([
    'resources/css/styles/datepicker.css',
    'resources/css/styles/datepicker3.css'
], 'public/css/datapicker.css');

mix.styles([
    'resources/bootstrap/css/bootstrap.min.css',
    'resources/bootstrap/css/bootstrap-theme.min.css',
], 'public/css/bootstrap.css');

mix.css('resources/css/styles/main.css', 'public/css/main.css');
