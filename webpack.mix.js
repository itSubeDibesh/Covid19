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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('DevDocs/chitchat/chitchat/assets/css', 'public/css')
    .copyDirectory('DevDocs/chitchat/chitchat/assets/images', 'public/images')
    .copyDirectory('DevDocs/chitchat/chitchat/assets/js', 'public/js')
    .copyDirectory('DevDocs/chitchat/chitchat/assets/vendor', 'public/vendor')
