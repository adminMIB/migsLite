<template>
   <div>
      <h5>Data Pembayaran</h5>
      <!-- Komponen 3 box header  -->
      <!-- <KomponenTigaBox :in_pembayaran="in_pembayaran"></KomponenTigaBox> -->
      <TablePembayaran :in_pembayaran="in_pembayaran"></TablePembayaran>
   </div>
</template>
<script>
import KomponenTigaBox from "./komponen/komponen_3_box.vue";
import TablePembayaran from "./komponen/komponen_table_pembayaran.vue";

export default {
   components: { KomponenTigaBox, TablePembayaran },
   data() {
      return {
         in_pembayaran: {}
      };
   },
   mounted() {
      this.load_client_key();
   },
   methods: {
      load_client_key() {
         this.$Progress.start();
         axios
            .get(this.$api_pembayaran())
            .then(respon => {
               this.in_pembayaran = respon.data.in_pembayaran;
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      }
   }
};
</script>
