<template>
  <ul class="SpeakersGrid">
					<li v-for="speaker in speakers" :id=speaker.id :data-speakerId=speaker.id>
                        <div class="GridImageContainer">
                          <div class="IconContainer">
                           <div title="Add To Current Grid" class="AddToGrid" @click="addSpeakerToGrid(speaker.id)"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                           <div title="Delete from Database" class="DeleteItem"  @click="deleteFromDatabase(speaker.id)"><i class="fa fa-trash" aria-hidden="true"></i></div>
                          </div>
                            <div class="GridOverlay">
                                <h2 class="SliphoverHeadline">{{ speaker.company_name }}</h2>
                            </div>

                            <img class="Square GridItem" :alt="speaker.full_name" :src="'/storage/sponsors/colored/'+speaker.logo_url">
                        </div>
                    </li>

    </ul>                

</template>

<script>

export default {
  data() {
	return {
		speakers: []
	};
  
  },

  methods: {
  	addSpeakerToGrid(speakerId){

  		this.$emit('speakeradded', speakerId);
  	},

    deleteFromDatabase(speakerId){
       var thisInstance = this;
       let thisSelected = this.selected;
       let thisSearch = this.speakerSearch;
     
        (new PNotify({
            title: 'Confirmation Needed',
            text: 'Are you sure you want to delete this speaker?',
            icon: 'fa fa-question-circle',
            type:'error',
            hide: false,
            confirm: {
                confirm: true
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }            

        })).get().on('pnotify.confirm', function() {
           

             axios.delete(`/api/sponsor/${speakerId}`)
              .then(response => {
                // JSON responses are automatically parsed.
                thisInstance.filterSpeakers(thisSelected, thisSearch);
                     new PNotify({
                        title: 'Success!',
                        text: 'Deleted Successfully!',
                        type: 'success'
                    }); 
              })
            .catch(function (error) {
               new PNotify({
                      title: 'Error!',
                      text: 'There was an unexpected error with the request. Please, reload the page and try again!',
                      type: 'error'
                  });           
              console.log(error);
            });

         
        }).on('pnotify.cancel', function() {
           
        });




    },

    filterSpeakers(gridId, searchQuery){
       let exludeG = '';
       let searchQ = '';

        if(gridId){
           exludeG = `exlude=${gridId}`;
        } 

        if(searchQuery){
           searchQ = `search=${searchQuery}`;
        } 

        axios.get(`/api/sponsors?${exludeG}&${searchQ}`)
        .then(response => {
          // JSON responses are automatically parsed.
          this.speakers = response.data
        })
        .catch(e => {
          this.errors.push(e)
        })
    },

    getAllSpeakers(){
        axios.get(`/api/sponsors`)
        .then(response => {
          // JSON responses are automatically parsed.
          this.speakers = response.data;

        })
        .catch(e => {
          this.errors.push(e)
        })

    }


  },

  // Fetches posts when the component is created.
  created() {
      this.getAllSpeakers();

    // async / await version (created() becomes async created())
    //
    // try {
    //   const response = await axios.get(`http://jsonplaceholder.typicode.com/posts`)
    //   this.posts = response.data
    // } catch (e) {
    //   this.errors.push(e)
    // }
  }
}
</script>

