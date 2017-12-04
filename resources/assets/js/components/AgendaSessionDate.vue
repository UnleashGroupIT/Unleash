<template>
  <div :class="bem()" v-if="show">

    <slot name="header"></slot>

    <div v-for="facet in facetValues" :key="facet.name" :class="facet.isRefined ? 'AgendaDateItem_Active' : 'AgendaDateItem'">

        <div class="DateSelector" v-model="facet.isRefined" @click="clearRefinements(); toggleRefinement(facet)">
            {{ facet.name }}
        </div> 




    </div>

    <slot name="footer"></slot>

  </div>
</template>


<script>
import { FACET_OR, FACET_AND } from 'vue-instantsearch';
import algoliaComponent from 'vue-instantsearch';
import { Component } from 'vue-instantsearch';

export default {
  mixins: [Component],
  props: {
    attributeName: {
      type: String,
      required: true,
    },
    operator: {
      type: String,
      default: FACET_OR,
      validator(rawValue) {
        const value = rawValue.toLowerCase();
        return value === FACET_OR || value === FACET_AND;
      },
    },
    limit: {
      type: Number,
      default: 30,
    },

    customorder: {
      type: String,
      default: "false",
    },

    sortBy: {
      default() {
        return ['name:asc'];
      },
    },
  },
  data() {
    return {
      blockClassName: 'agenda-session',
      tracklist: [],
      trackdates: [],
    };
  },
  created() {
this.searchStore.addFacetRefinement('tracks.event_id', '1');

this.tracklist = trackData;
    this.trackdates = trackDates;
    this.searchStore.addFacet(this.attributeName, this.operator);
    let miscElem = document.getElementById('MiscScripts');
    if (miscElem){
      miscElem.remove();
    }

this.searchStore.toggleFacetRefinement('start_time.day','24');

  },
  destroyed() {
    this.searchStore.stop();
    this.searchStore.removeFacet(this.attributeName);
    this.searchStore.start();
  },
  computed: {
    facetValues() {
     let filters = this.searchStore.getFacetValues(
        this.attributeName,
        this.sortBy,
        this.limit
      );
     

        var orderedList = [];
         let dateList = JSON.parse(JSON.stringify(this.trackdates));

        if(filters[0]){

   
        //  console.log(tracklist);

          for (const key of Object.keys(dateList)) {
              // console.log(key, tracklist[key]);
              let found = 0;
              filters.forEach(function(value, key2){

  
                  if (value.name == dateList[key]){
                      orderedList.push(value);
                      found = 1;
                  }
                  
              });

              if (found == 0){
                  let newVal = {
                    name: dateList[key],
                    count: 0,
                    isRefined: false
                  };
                 orderedList.push(newVal);
              }
            }
         
         
        /* tracklist.map(function(value, key) {
            console.log(value)
          // list.push(value);
           }); */     

          // return orderedList;
            //console.log(this.tracklist);
            //console.log(this.searchStore);
        } else {

          for (const key of Object.keys(dateList)) {

           
                  let newVal = {
                    name: dateList[key],
                    count: 0,
                    isRefined: false
                  };
                 orderedList.push(newVal);
              }


        }
       
     


     return orderedList;
    },
    show() {
      return this.facetValues.length > 0;
    },
  },
  methods: {
    toggleRefinement(value) {
      return this.searchStore.toggleFacetRefinement(
        this.attributeName,
        value.name
      );
    },
    clearRefinements() {
      return this.searchStore.clearRefinements(
        this.attributeName,
      );
    }
  },
  watch: {
    operator() {
      this.searchStore.addFacet(this.attributeName, this.operator);
    },
  },
};
</script>