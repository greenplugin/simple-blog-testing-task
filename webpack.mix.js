const mix = require('laravel-mix')

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

mix.js('resources/js/frontend/app.js', 'public/js/frontend')
  .sass('resources/sass/frontend/app.scss', 'public/css/frontend')

mix.js('resources/js/panel/app.js', 'public/js/panel')
  .sass('resources/sass/panel/app.scss', 'public/css/panel')
