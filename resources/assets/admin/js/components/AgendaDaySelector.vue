<template>
	<ul class="side tabs">
		<li v-for="day in eventdates.days" :class ="calcClasses(day)" :id="create_id(day)"  @click="change_day(day)">
			{{ calcMonth(eventdates.month)}} {{day}}
		</li>
 
	</ul>	
</template>

<script>

export default {
    aSessions: null,
    dataReady: false,	
  data() {
	return {
		month: null,
		eventid: null,
		eventcode: null,
		eventdates: {},
		eventdata: null,
    selecteddaaay: null,
 
	};
  
  },

 props: ['selectedevent', 'seldayy'],  

//TODO: Reload the selected grid when we edit a speaker
/*
    	<li @click="changeDay(day1, 1)" class="tab active" id = "s_day-1">{{month}} {{day}}.</li>
    	<li @click="changeDay(day2, 2)" class="tab" id = "s_day-2">{{month}} {{day}}.</li> 
*/

  methods: {
  	create_id(day){
  		return "s_day-"+day;
  	},

    get_event_days(data, eid){
      let res = {};
            $.each( data, function( key, value ) {
             
              if(value.id == eid){
                  res.days = value.days;
                  res.month = value.month;
              }

           });

            return res;
       },  

       change_day(id){
       $('.tabs .tab').removeClass('active');
       $('#s_day-'+id).addClass('active');
        this.$emit('daychange', id);
       }, 

       calcClasses(day){
         if(day === this.selecteddaaay){
          return "tab active";
         } else {
          return "tab";
         }


       },
       calcMonth(month){
          switch(month){
                    case 1:
                     return 'January';
                    break;
                    case 2:
                     return 'February';
                    break;
                    case 3:
                     return 'March';
                    break;
                    case 4:
                     return 'April';
                    break;
                    case 5:
                     return 'May';
                    break;
                    case 6:
                     return 'June';
                    break;
                    case 7:
                     return 'July';
                    break;
                    case 8:
                     return 'August';
                    break;
                    case 9:
                     return 'September';
                    break;
                    case 10:
                     return 'October';
                    break;
                    case 11:
                     return 'November';
                    break;
                    case 12:
                     return 'December';
                    break;                                              
                          
                  }

       }, 

  },

  // Fetches posts when the component is created.
  async mounted() {
    
  	this.eventid = default_event_id;
  	this.eventcode = default_event_code;
    this.eventdata = eventdata;
  	//this.eventdates = this.get_event_days(eventdata, default_event_id);


  },



  watch: {

    selectedevent: function (val){
      this.eventid = val;
      this.eventdates = this.get_event_days(this.eventdata, val);

    },

    seldayy: function (val){
      this.selecteddaaay = val;

    },

  }


}
</script>