<template>
  <div >
  <h2>{{ category_name }}</h2>
        <ul v-sortable="sortableOptions">
             <li v-for="sponsor in sponsors" :id=sponsor.id :data-sponsorid=sponsor.id class="sortable">
                            <div class="GridImageContainer" v-if="sponsor.pivot.category_id == category_id">
                              <div class="IconContainer">
                               <div title="Remove from selected grid" class="RemoveFromGrid" v-on:click="removeFromGrid(sponsor.id)"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                                <div title="Edit Sponsor across all events" class="EditSponsorGlobal" v-on:click="editFilteredSponsor(sponsor.id)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                              </div>
                                <div class="GridOverlay">
                                    <h2 class="SliphoverHeadline">{{ sponsor.company_name }}</h2>
                                </div>
                                <img class="Square GridItem" :alt="sponsor.company_name" :src="'/storage/sponsors/colored/'+sponsor.logo_url">
                            </div>              
            </li>

          </ul>
   </div>            
</template>

<script>

export default {
   props: ['sponsors', 'category_name', 'category_id'],
  data() {
	return {
		//sponsors: [],   
	};
  
  },

  methods: {
  	

  },

  // Fetches posts when the component is created.
  created() {

  },

  watch: {

  }  
}
</script>

