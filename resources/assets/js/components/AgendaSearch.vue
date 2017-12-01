<!-- CurrentQuery.vue -->
<template>
  <div>
    {{ query }}
  </div>
</template>

<script>
import { CustomAgenda } from 'vue-instantsearch';

export default {
  mixins: [CustomAgenda],
  computed: {
    query() {
      return this.searchStore.query;
    },
  },
};
</script>