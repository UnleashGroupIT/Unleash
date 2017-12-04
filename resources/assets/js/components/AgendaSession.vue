<template>
  <div :class="bem()" v-if="show">

    <slot name="header"></slot>

    <div v-for="facet in facetValues" :key="facet.name" :class="[facet.isRefined ? bem('item', 'active') : bem('item'), facet.isVisible ? 'ActiveItem' : 'DisabledItem' ]">
      <label :class="bem('label')">
        <input type="checkbox"
               :class="bem('checkbox')"
               v-model="facet.isRefined"
               @change="toggleRefinement(facet)"
               :value="facet.name"
        >

        <slot :count="facet.count" :active="facet.isRefined" :value="facet.name">
          <span :class="bem('value')">{{facet.name}}</span>
         <!-- <span :class="bem('count')">{{facet.count}}</span> -->
        </slot>
      </label>
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
    };
  },
  created() {

    this.tracklist = trackData;
    this.searchStore.addFacet(this.attributeName, this.operator);
    let miscElem = document.getElementById('MiscScripts');
    if (miscElem){
      miscElem.remove();
    }

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
        let tracklist = JSON.parse(JSON.stringify(this.tracklist));
        if(filters[0]){

         
        //  console.log(tracklist);

          for (const key of Object.keys(tracklist)) {
               let found = 0;
              filters.forEach(function(value, key2){
               
                  if (value.name === tracklist[key]){
                      value.isVisible = true;
                      orderedList.push(value);
                      found = 1;
                  }
                  
              });

              if (found == 0){
                  let newVal = {
                    name: tracklist[key],
                    count: 0,
                    isRefined: false,
                    isVisible: false
                  };
                 orderedList.push(newVal);
              }              
            }
          
        /* tracklist.map(function(value, key) {
            console.log(value)
          // list.push(value);
           }); */     

           
            //console.log(this.tracklist);
            //console.log(this.searchStore);
        } else {
          
          for (const key of Object.keys(tracklist)) {

                  let newVal = {
                    name: tracklist[key],
                    count: 0,
                    isRefined: false,
                    isVisible: false
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
    }
  },
  watch: {
    operator() {
      this.searchStore.addFacet(this.attributeName, this.operator);
    },
  },
};
</script>

