require('../bootstrap');


Vue.component(
    'agenda-session',
    require('../components/AgendaSession.vue')
);

Vue.component(
    'agenda-session-date',
    require('../components/AgendaSessionDate.vue')
);

Vue.component(
    'agenda-searchbox',
    require('../components/AgendaSearch.vue')
);


 const app = new Vue({
  el: '#AgendaSection',

  methods: {
   getMinutesBetweenDates(startDate, endDate) {


    var diff = endDate - startDate;
    return (diff /60);
  } 
  },
   
});

