window._ = require('lodash');

	 window.jQuery = require('jquery');
     window.bootstrap = require('bootstrap');
global.axios = require('axios');


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
var spVue = new Vue({
	el: '#app',

	data: {

		event: null,

		

	},//data,



	methods: {
		newSession(){
			console.log('moo');
		},
	

},

  mounted(){


  }



});





