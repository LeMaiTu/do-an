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

mix.copyDirectory([
    'resources/assets/js/',
], 'public/js');

mix.styles([
    'resources/assets/css/styles/datepicker.css',
    'resources/assets/css/styles/datepicker3.css'
], 'public/css/datapicker.css');

mix.copyDirectory([
    'resources/assets/bootstrap/css/',
], 'public/css/bootstrap');

mix.copyDirectory([
    'resources/assets/images/',
], 'public/images');

mix.css('resources/assets/css/styles/styles.css', 'public/css/style.css');
