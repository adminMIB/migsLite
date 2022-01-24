<template>
   <div>
      <Pembayaran></Pembayaran>
   </div>
</template>
<script>
import Pembayaran from "./pembayaran/index.vue";
export default {
   components: {
      Pembayaran
   },
   data() {
      return {
         in_data: {}
      };
   },
   mounted() {},
   methods: {}
};
</script>