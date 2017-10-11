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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.sass('resources/assets/scss/about.scss', 'public/css')
   .sass('resources/assets/scss/agenda.scss', 'public/css')
   .sass('resources/assets/scss/agenda_old.scss', 'public/css')
   .sass('resources/assets/scss/flipclock.scss', 'public/css')
   .sass('resources/assets/scss/floorplan.scss', 'public/css')
   .sass('resources/assets/scss/index.scss', 'public/css')
   .sass('resources/assets/scss/menu.scss', 'public/css')
   .sass('resources/assets/scss/reset.scss', 'public/css')
   .sass('resources/assets/scss/speaker.scss', 'public/css')
   .sass('resources/assets/scss/speakers.scss', 'public/css')
   .sass('resources/assets/scss/sponsor.scss', 'public/css')
   .sass('resources/assets/scss/sponsors.scss', 'public/css') 
   .sass('resources/assets/scss/startup.scss', 'public/css')
   .sass('resources/assets/scss/stream.scss', 'public/css')
   .options({
      processCssUrls: false
   });;   
   
mix.js('resources/assets/js/agenda.js', 'public/js') 
   .js('resources/assets/js/flipclock.min.js', 'public/js')
   .js('resources/assets/js/main.js', 'public/js')
   .js('resources/assets/js/parallax.min.js', 'public/js')   
   