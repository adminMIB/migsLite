<template>
   <button class="btn btn-sm" @click="kembali">
      <i class="fa fa-chevron-left mr-2" aria-hidden="true"></i>
      Kembali
   </button>
</template>
<script>
export default {
   data() {
      return {};
   },
   mounted() {},
   methods: {
      kembali() {
         this.$router.go(-1);
      }
   }
};
</script>