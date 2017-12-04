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
    var start = new Date(startDate);
    var end = new Date(endDate);

    var diff = start - end;
    return (diff / 60000);
  } 
  },
   
});

