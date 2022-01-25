<template>
   <div class="my-2">
      <div class="row">
         <div class="col">
            <div class="rounded-right text-center bg-white elevation-2">
               <div class="gr-bg-d-blue text-white rounded text-left">
                  <div class="h6 font-weight-bolder p-2">Hari ini</div>
               </div>
               <div class="p-2">
                  <div class="row">
                     <div class="col">
                        <div>Total</div>
                        <h5 class="font-weight-bolder">{{in_pembayaran_total_hari_ini}}</h5>
                     </div>
                     <div class="col">
                        <div>Jumlah</div>
                        <h5 class="font-weight-bolder">{{in_pembayaran_jumlah_hari_ini | IDR}}</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="rounded-right text-center bg-white elevation-2">
               <div class="gr-bg-d-blue text-white rounded text-left">
                  <div class="h6 font-weight-bolder p-2">Pembayaran Diteirma</div>
               </div>
               <div class="p-2">
                  <div class="row">
                     <div class="col">
                        <div>Total</div>
                        <h5 class="font-weight-bolder">{{in_pembayaran_total_diterima}}</h5>
                     </div>
                     <div class="col">
                        <div>Jumlah</div>
                        <h5 class="font-weight-bolder">{{in_pembayaran_jumlah_diterima | IDR}}</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="rounded-right text-center bg-white elevation-2">
               <div class="gr-bg-d-blue text-white rounded text-left">
                  <div class="h6 font-weight-bolder p-2">Pembayaran Pending</div>
               </div>
               <div class="p-2">
                  <div class="row">
                     <div class="col">
                        <div>Total</div>
                        <h5 class="font-weight-bolder">{{in_pembayaran_total_pending}}</h5>
                     </div>
                     <div class="col">
                        <div>Jumlah</div>
                        <h5 class="font-weight-bolder">{{in_pembayaran_jumlah_pending | IDR}}</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
   props: ["in_client_key"],
   data() {
      return {
         in_pembayaran_total_hari_ini: 0,
         in_pembayaran_jumlah_hari_ini: 0,
         in_pembayaran_total_diterima: 0,
         in_pembayaran_jumlah_diterima: 0,
         in_pembayaran_total_pending: 0,
         in_pembayaran_jumlah_pending: 0
      };
   },
   mounted() {
      this.load_box_hari_ini();
      this.load_box_diterima();
      this.load_box_pending();
   },
   methods: {
      load_box_hari_ini() {
         axios
            .get(this.$api_pembayaran("filter/hari-ini"))
            .then(respon => {
               this.in_pembayaran_total_hari_ini =
                  respon.data.in_pembayaran_total_hari_ini;
               this.in_pembayaran_jumlah_hari_ini =
                  respon.data.in_pembayaran_jumlah_hari_ini;
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },
      load_box_diterima() {
         axios
            .get(this.$api_pembayaran("filter/diterima"))
            .then(respon => {
               this.in_pembayaran_total_diterima =
                  respon.data.in_pembayaran_total_diterima;
               this.in_pembayaran_jumlah_diterima =
                  respon.data.in_pembayaran_jumlah_diterima;
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },
      load_box_pending() {
         axios
            .get(this.$api_pembayaran("filter/pending"))
            .then(respon => {
               this.in_pembayaran_total_pending =
                  respon.data.in_pembayaran_total_pending;
               this.in_pembayaran_jumlah_pending =
                  respon.data.in_pembayaran_jumlah_pending;
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