window._ = require('lodash');

/*	 window.jQuery = require('jquery');
	 window.$ = window.jQuery;
     window.bootstrap = require('bootstrap');*/
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
	el: '#Agenda',

	data: {

		eventid: null,
		eventcode: null,
		day: null,
		filters: [],
		searchbar: null,
		agendasession: null,
		events: null,
		day1: null,
		day2: null,
		speakersearch: null,
		speakers: null,
		

	},//data,



	methods: {


		getDays(){
			var vm = this;
		this.events.forEach(function(element) {
		     if(element.id == default_event_id){
		   		vm.day1 = element.day1;
		   		vm.day2 = element.day2;
		     }
			});
		},	

		changeDay(selected, id){
			this.day = selected;
			this.filteredSearch();
			$('.tabs .tab').removeClass('active');
			$('#s_day-'+id).addClass('active');
		},	

 		filteredSearch(){
			let eId = this.eventid;
			let day = this.day;
			var filters;
			let searchQuery = '';
			
			if (this.filters[0]){
				filters = this.filters;
			     filters = JSON.stringify(filters);
    			 filters = encodeURIComponent(filters);	
			} else {
				 filters = ' ';
			}

			if (this.searchbar){
				searchQuery = '&keyword='+this.searchbar;
			}
    			 
			axios.get('/api/agenda/search?eventid='+eId+'&day='+day+'&tracks='+filters+searchQuery)
			  	   .then((response) => {
  			this.agendasession = response.data;
  			});
		},



     searchForSpeakers(keyword){

        axios.get(`/api/speakers?search=${keyword}&limit=5`)
        .then(response => {
          // JSON responses are automatically parsed.
          this.speakers = response.data.data;
          
        })
        .catch(e => {
         console.log(e);
        })

     },



				

	},

  mounted(){
  	this.eventid = default_event_id;
  	this.eventcode = default_event_code;
  	this.day = default_day;
  	this.events = eventdata;
  	eventdata = '';
  	this.getDays();
  },

  watch: {

  	filters: function (val){
  		this.filters = val;
  		this.filteredSearch();

  	},
  	searchbar: function (val){
  	  	this.searchbar = val;
  		this.filteredSearch();	
  	},
    speakersearch: function (val){
    	this.searchForSpeakers(val);
    }

  }  


});







