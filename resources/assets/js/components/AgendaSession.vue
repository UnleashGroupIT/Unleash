<template>
  <div>
    <!-- Welcome &amp; Introduction from the MC -->
        <div v-for="session in track.sessions" v-if="day == session.start_time.day" :class="['Session', 'SessionToggle', trackColorChecker(session.category_id, track.color_class)]"  :data-agenda_id="session.id" :data-agenda_day="session.start_time.day" data-agenda_category="1">
            <div class="SessionTimeContainer">
                <h3 class="SessionStartTime">{{session.start_time.time}}</h3>
            </div>
            <div class="SessionContent">
                <h3 class="SessionTitle" onClick="_gaq.push(['_trackEvent', 'Agenda', 'Toggle', 'Session']);"> {{session.session_title}}  
                    <i v-if="session.session_description || session.speakers[0]" class="fa fa-angle-down"></i>
                </h3>
             </div><!-- Session Info -->
                <div class="SessionInfo" v-if="session.session_description || session.speakers[0]">
                      <!-- Session Info Speakers Grid -->
                      <div v-if="session.speakers[0]" class="SessionInfoSpeakersGrid">

                        <div v-for="speakers in session.speakers" class="SessionInfoSpeaker">
                            <a :href="'speaker/'+speakers.id" :title="speakers.full_name"><img :src="'/storage/speakers/'+ speakers.img_url" :alt="speakers.full_name"></a>
                                <div class="SessionInfoSpeakerDetails">
                                    <p><a :href="'speaker/'+speakers.id" :title="speakers.full_name" :class="track.color_class+'Color'">{{speakers.full_name}}</a></p>
                                    <p class="SessionInfoSpeakerJobtitle">{{speakers.job_title}}</p>
                                    <p :class="track.color_class+'Color'"><a :href="speakers.website" target="_blank" title="Visit Website" class="track.color_class+'Color'">{{speakers.company}}</a></p>
                                </div>
                        </div>

                      </div>
                     <!-- end Session Info Speakers Grid -->
                     <!-- Session Abstract -->
                     <div class="SessionAbstract" v-if="session.session_description">
                      <p>{{session.session_description}}</p>
                    </div>
                      <!-- end Session Abstract -->
                </div>
               </div> <!-- end Session Info --> 
        <!-- END Welcome &amp; Introduction from the MC -->            
   </div>
</template>

<script>

export default {
  props: ['day', 'daycode'],
  data() {
	return {
		track: {},
		extra: 0,
	};
  
  },

  methods: {
//BreakTextColor BreakTextClass
//track.color_class+'Color'

    switchSession(trackData){

      var thisInstance = this;

        let found = false;
        for(let i = 0; i < trackData.sessions.length; i++) {

            if (typeof trackData.sessions[i].start_time.day != "undefined" && trackData.sessions[i].start_time.day == this.day) {
                found = true;
                break;
            }
        }

      this.track = trackData;
      setTimeout(()=>{
        if(this.daycode == 1){
          this.$root.$data.dayoneset = found;
        }
        if(this.daycode == 2){
          this.$root.$data.daytwoset = found;
        }
        this.$root.$data.DesktopAgendaToggle = 1;
       
      }, 300);
      
    },

   trackColorChecker(categoryId, color){
      if(categoryId == 1){
        return color+'Color';
      } else {
        return "BreakTextColor BreakTextClass";
      }
   }       


  },

  // Fetches posts when the component is created.
  created() {
    this.$parent.$on('loadSessions', this.switchSession);



  }
}
</script>

