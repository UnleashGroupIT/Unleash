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

mix.sass('resources/assets/scss/amsterdam/flipclock.scss', 'public/css/amsterdam') 
.sass('resources/assets/scss/london/flipclock.scss', 'public/css/london')
.sass('resources/assets/scss/404.scss', 'public/css')
.sass('resources/assets/scss/lasvegas/flipclock.scss', 'public/css/lasvegas')
   .options({
         processCssUrls: false,
           purifyCss: false      
      });
 

/******** Global **************/   
mix.sass('resources/assets/scss/global/press.scss', 'public/css/global')
   .sass('resources/assets/scss/global/about.scss', 'public/css/global')
.sass('resources/assets/scss/header-footer.scss', 'public/css')
   .sass('resources/assets/scss/global/startup.scss', 'public/css/global')
   .sass('resources/assets/scss/global/holiday.scss', 'public/css/global').options({
         processCssUrls: false,
          /* purifyCss: {
                  purifyOptions: {
                       whitelist: ['sponsor', 'come-in', 'visible', 'flip', 'play', 'flip-clock-active', 'minutes', 'hours', 'days', 'flip-clock-dot top', 'flip-clock-dot bottom', 'top', 'bottom', 'flip-clock-dot', 'flip-clock-label', 'flip-clock-wrapper', 'your-clock', 'flip-clock-divider', 'flip-clock-before', 'flip-clock-after']
                  }
              } */     
      })
   .version(); 
 
 mix.js('resources/assets/js/agenda.js', 'public/js') 
/******** Amsterdam *********/  
mix.js('resources/assets/js/amsterdam/flipclock.min.js', 'public/js/amsterdam')
   .js('resources/assets/js/amsterdam/main.js', 'public/js/amsterdam');
   

mix.js(['resources/assets/js/amsterdam/flipclock.min.js',
   'resources/assets/js/main.js'], 'public/js/amsterdam/unleash-amsterdam.js')
   .version();  


mix.sass('resources/assets/scss/amsterdam/about.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/index.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/speaker.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/speakers.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/sponsor.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/sponsors.scss', 'public/css/amsterdam')  
   .sass('resources/assets/scss/amsterdam/venue.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/agenda.scss', 'public/css/amsterdam')  
   .sass('resources/assets/scss/amsterdam/terms.scss', 'public/css/amsterdam')
   .sass('resources/assets/scss/amsterdam/tickets_temp.scss', 'public/css/amsterdam')    
   .sass('resources/assets/scss/amsterdam/pdfs.scss', 'public/css/amsterdam')      
   .options({
         processCssUrls: false,
           /*purifyCss: {
                  purifyOptions: {
                       whitelist: ['sponsor', 'come-in', 'visible', 'flip', 'play', 'flip-clock-active', 'minutes', 'hours', 'days', 'flip-clock-dot top', 'flip-clock-dot bottom', 'top', 'bottom', 'flip-clock-dot', 'flip-clock-label', 'flip-clock-wrapper', 'your-clock', 'flip-clock-divider', 'flip-clock-before', 'flip-clock-after']
                  }
              } */     
      })
   .version(); 

/******** America *********/
mix.js('resources/assets/js/lasvegas/flipclock.min.js', 'public/js/lasvegas')
   .js('resources/assets/js/lasvegas/main.js', 'public/js/lasvegas');  

mix.sass('resources/assets/scss/lasvegas/about.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/index.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/speaker.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/speakers.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/sponsor.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/sponsors.scss', 'public/css/lasvegas')  
   .sass('resources/assets/scss/lasvegas/venue.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/travel.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/volunteer.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/startup.scss', 'public/css/lasvegas')
   .sass('resources/assets/scss/lasvegas/tickets_temp.scss', 'public/css/lasvegas')     
   .sass('resources/assets/scss/lasvegas/tickets_old.scss', 'public/css/lasvegas')     
   .sass('resources/assets/scss/lasvegas/pdfs.scss', 'public/css/lasvegas')       
   .options({
         processCssUrls: false,
          /* purifyCss: {
                  purifyOptions: {
                       whitelist: ['sponsor', 'come-in', 'visible', 'flip', 'play', 'flip-clock-active', 'minutes', 'hours', 'days', 'flip-clock-dot top', 'flip-clock-dot bottom', 'top', 'bottom', 'flip-clock-dot', 'flip-clock-label', 'flip-clock-wrapper', 'your-clock', 'flip-clock-divider', 'flip-clock-before', 'flip-clock-after']
                  }
              } */     
      })
   .version();    


/******** London *********/
mix.js('resources/assets/js/london/agenda.js', 'public/js/london') 
.js('resources/assets/js/london/flipclock.min.js', 'public/js/london')
.js('resources/assets/js/london/responsiveslides.js', 'public/js/london')
.js('resources/assets/js/london/main.js', 'public/js/london');

mix.sass('resources/assets/scss/london/index.scss', 'public/css/london')
   .sass('resources/assets/scss/london/speaker.scss', 'public/css/london')
   .sass('resources/assets/scss/london/speakers.scss', 'public/css/london')
   .sass('resources/assets/scss/london/sponsor.scss', 'public/css/london')
   .sass('resources/assets/scss/london/sponsors.scss', 'public/css/london')  
   .sass('resources/assets/scss/london/venue.scss', 'public/css/london')
   .sass('resources/assets/scss/london/startup.scss', 'public/css/london')
   .sass('resources/assets/scss/london/travel.scss', 'public/css/london')
   .sass('resources/assets/scss/london/volunteer.scss', 'public/css/london')
   .sass('resources/assets/scss/london/loyalty.scss', 'public/css/london')
   .sass('resources/assets/scss/london/speakergrid-travel.scss', 'public/css/london') 
   .sass('resources/assets/scss/london/tickets_temp.scss', 'public/css/london')   
   .sass('resources/assets/scss/london/tickets_old.scss', 'public/css/london')
   .sass('resources/assets/scss/london/pdfs.scss', 'public/css/london')  
   .sass('resources/assets/scss/london/agenda.scss', 'public/css/london')
   .sass('resources/assets/scss/london/agenda_beta.scss', 'public/css/london')   
   .sass('resources/assets/scss/london/agenda-v2.scss', 'public/css/london')     
   .options({
         processCssUrls: false,
          /* purifyCss: {
                  purifyOptions: {
                       whitelist: ['sponsor', 'come-in', 'visible', 'flip', 'play', 'flip-clock-active', 'minutes', 'hours', 'days', 'flip-clock-dot top', 'flip-clock-dot bottom', 'top', 'bottom', 'flip-clock-dot', 'flip-clock-label', 'flip-clock-wrapper', 'your-clock', 'flip-clock-divider', 'flip-clock-before', 'flip-clock-after']
                  }
              } */     
      })
   .version();    

   
   
mix.copy('resources/assets/gfx', 'public/gfx', false); // Don't flatten!   
   