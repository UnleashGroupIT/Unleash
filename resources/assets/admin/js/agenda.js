window._ = require('lodash');

	 window.jQuery = require('jquery');
	 window.$ = window.jQuery;
     window.bootstrap = require('bootstrap');
global.axios = require('axios');


window.jQuery.fn.extend({
    animateCss: function (animationName, callback) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
            if (callback) {
              callback();
            }
        });
        return this;
    }
});

global.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  global.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}




global.Vue = require('vue');

var VueResource = require('vue-resource');

Vue.use(VueResource);

global.PNotify = require('pnotify');



import 'pnotify/dist/pnotify.css';
import 'pnotify/dist/pnotify.brighttheme.css';
import 'pnotify/dist/pnotify.buttons.css';
import 'pnotify/dist/pnotify.buttons.js';
import 'pnotify/dist/pnotify.confirm.js';


PNotify.prototype.options.styling = "bootstrap3";
PNotify.prototype.options.styling = "fontawesome";
PNotify.prototype.options.delay = 3500;


//const instantsearch = require('instantsearch.js');  
global.moment = require('moment');

const momenttimezone = require('moment-timezone');

/*@preserve
 * Tempus Dominus Bootstrap4 v5.0.0-alpha14 (https://tempusdominus.github.io/bootstrap-4/)
 * Copyright 2016-2017 Jonathan Peterson
 * Licensed under MIT (https://github.com/tempusdominus/bootstrap-3/blob/master/LICENSE)
 */

 Vue.component(
    'agenda-sessions',
    require('./components/AgendaSessions.vue')
);

var spVue = new Vue({
	el: '#app',

	data: {

		eventid: null,
		eventcode: null,
		day: null,
		filters: []

		

	},//data,



	methods: {
		newSession(){
			console.log('moo');
		},


		selectPage(type){
			let activteThis = '';
			jQuery('.tab').removeClass('adminActive');
			   switch (type) {
				 	case 'Sessions':
				 		activteThis = "#Sessions";
				 		jQuery('#SessionButton').addClass('adminActive');
				 		break;
				 	case 'NewSession':
				 		activteThis = "#NewSession";
				 		jQuery('#NewSessionButton').addClass('adminActive');
				 		break;
				 	case 'Tracks':
				 	    jQuery('#TrackButton').addClass('adminActive');
				 		activteThis = "#Tracks";
				 		break;				 						 	
				 	default:
				 		
				 		break;
				 }
				 
				 let activeNow = jQuery('.activeTab').attr("id");
				 console.log(activeNow);

			jQuery('.activeTab').animateCss('bounceOutRight', function () {
				jQuery('.activeTab').addClass('hiddenTab');
				jQuery("#"+activeNow).removeClass("activeTab");

			    jQuery(activteThis).animateCss('bounceInLeft');
			    jQuery(activteThis).addClass('activeTab');
			});
					
				 

		},


	

	},

  mounted(){
  	this.eventid = default_event_id;
  	this.eventcode = default_event_code;
  	this.day = default_day;

  },


});







