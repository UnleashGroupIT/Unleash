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
   .js('resources/assets/js/main.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css/amsterdam');

mix.sass('resources/assets/scss/menu.scss', 'public/css')
   .sass('resources/assets/scss/popup.scss', 'public/css')
   .sass('resources/assets/scss/404.scss', 'public/css');


//Amsterdam   
mix.sass('resources/assets/scss/amsterdam/about.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/agenda.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/common.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/agenda_old.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/flipclock.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/floorplan.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/speakergrid.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/index.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/menu.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/reset.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/speaker.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/speakers.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/sponsor.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/sponsors.scss', 'public/css/amsterdam') 
   .sass('resources/assets/scss/amsterdam/startup.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/stream.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/terms.scss', 'public/css/amsterdam')
      .options({
      processCssUrls: false
   }); 
   
mix.js('resources/assets/js/amsterdam/agenda.js', 'public/js/amsterdam') 
   .js('resources/assets/js/amsterdam/flipclock.min.js', 'public/js/amsterdam')
   .js('resources/assets/js/amsterdam/main.js', 'public/js/amsterdam')
   .js('resources/assets/js/amsterdam/parallax.min.js', 'public/js/amsterdam');
   
//London
mix.sass('resources/assets/scss/london/about.scss', 'public/css/london')
   .sass('resources/assets/scss/london/agenda.scss', 'public/css/london')
   .sass('resources/assets/scss/london/common.scss', 'public/css/london')
   .sass('resources/assets/scss/london/agenda_old.scss', 'public/css/london')
   .sass('resources/assets/scss/london/flipclock.scss', 'public/css/london')
   .sass('resources/assets/scss/london/floorplan.scss', 'public/css/london')
   .sass('resources/assets/scss/london/speakergrid.scss', 'public/css/london')
   .sass('resources/assets/scss/london/index.scss', 'public/css/london')
   .sass('resources/assets/scss/london/menu.scss', 'public/css/london')
   .sass('resources/assets/scss/london/popup.scss', 'public/css/london')
   .sass('resources/assets/scss/london/reset.scss', 'public/css/london')
   .sass('resources/assets/scss/london/speaker.scss', 'public/css/london')
   .sass('resources/assets/scss/london/speakers.scss', 'public/css/london')
   .sass('resources/assets/scss/london/sponsor.scss', 'public/css/london')
   .sass('resources/assets/scss/london/sponsors.scss', 'public/css/london') 
   .sass('resources/assets/scss/london/startup.scss', 'public/css/london')
   .sass('resources/assets/scss/london/stream.scss', 'public/css/london')
   .sass('resources/assets/scss/london/tickets_old.scss', 'public/css/london')      
      .options({
      processCssUrls: false
   }); 
mix.js('resources/assets/js/london/agenda.js', 'public/js/london') 
.js('resources/assets/js/london/flipclock.min.js', 'public/js/london')
.js('resources/assets/js/london/main.js', 'public/js/london')
.js('resources/assets/js/london/parallax.min.js', 'public/js/london');
   
//Lasvegas
mix.sass('resources/assets/scss/lasvegas/about.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/agenda.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/agenda_old.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/flipclock.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/common.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/floorplan.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/speakergrid.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/index.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/menu.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/popup.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/reset.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/speaker.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/speakers.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/sponsor.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/sponsors.scss', 'public/css/lasvegas') 
   .sass('resources/assets/scss/lasvegas/startup.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/stream.scss', 'public/css/lasvegas')
      .options({
      processCssUrls: false
   });    

mix.js('resources/assets/js/lasvegas/agenda.js', 'public/js/lasvegas') 
   .js('resources/assets/js/lasvegas/flipclock.min.js', 'public/js/lasvegas')
   .js('resources/assets/js/lasvegas/main.js', 'public/js/lasvegas')
   .js('resources/assets/js/lasvegas/parallax.min.js', 'public/js/lasvegas');   
   
mix.copy('resources/assets/gfx', 'public/gfx', false); // Don't flatten!   
   