let mix = require('laravel-mix');

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


 mix.js('resources/assets/admin/js/app.js', 'public/admin/js')
   .js('resources/assets/admin/js/api.js', 'public/admin/js')
   .sass('resources/assets/admin/scss/app.scss', 'public/admin/css');

mix.sass('resources/assets/admin/scss/style.scss', 'public/admin/css');   
mix.sass('resources/assets/admin/scss/speakers.scss', 'public/admin/css'); 
mix.sass('resources/assets/admin/scss/sponsors.scss', 'public/admin/css'); 
   
mix.js('resources/assets/admin/js/speakers.js', 'public/admin/js');
mix.js('resources/assets/admin/js/sponsors.js', 'public/admin/js');
mix.js('resources/assets/admin/js/axiostest.js', 'public/admin/js');


mix.copy('resources/assets/admin/scss/bootstrap.min.css', 'public/admin/css/bootstrap.min.css');


   