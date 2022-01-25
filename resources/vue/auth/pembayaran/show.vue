<template>
   <div>
      <kembali></kembali>
      <h5>Detail Transaksi</h5>
      <div class="bg-white p-2 rounded">
         <table
            class="table-sm table-borderless"
            v-for=" (pembayaran,i_pembayaran) in in_pembayaran"
            :key="i_pembayaran"
         >
            <thead>
               <tr v-for=" (data,key_data,i_data) in pembayaran" :key="i_data">
                  <th>{{key_data}}</th>
                  <td>{{data}}</td>
               </tr>
            </thead>
         </table>
      </div>
   </div>
</template>
<script>
export default {
   data() {
      return {
         kd_pembayaran_transaksi: "",
         in_pembayaran: ""
      };
   },
   mounted() {
      this.kd_pembayaran_transaksi = this.$router.currentRoute.params.kd_pembayaran;
      this.load_detail_pembayaran();
   },
   methods: {
      load_detail_pembayaran() {
         this.$Progress.start();
         axios
            .get(this.$api_pembayaran(`detail/${this.kd_pembayaran_transaksi}`))
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