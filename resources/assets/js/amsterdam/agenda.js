require('../bootstrap');


Vue.component(
    'agenda-session',
    require('../components/AgendaSession.vue')
);

Vue.component(
    'agenda-session-date',
    require('../components/AgendaSessionDate.vue')
);


 const app = new Vue({
  el: '#AgendaSection',
   
});
