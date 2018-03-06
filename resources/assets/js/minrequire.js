window._ = require('lodash');

/*	 window.jQuery = require('jquery');
	 window.$ = window.jQuery;
     window.bootstrap = require('bootstrap');*/
global.axios = require('axios');

global.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  global.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
