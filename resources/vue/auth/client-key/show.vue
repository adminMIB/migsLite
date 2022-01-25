<template>
   <div>
      <kembali></kembali>
      <h5>Detail Client</h5>
      <!-- Komponen 3 box header  -->
      <section v-if="in_client_key">
         <KomponenDataClient
            :in_client_key="in_client_key"
            :in_pembayaran_terakhir="in_pembayaran_terakhir"
         ></KomponenDataClient>
         <KomponenTigaBox :in_client_key="in_client_key"></KomponenTigaBox>
      </section>
      <KomponenTablePembayaran v-if="in_pembayaran" :in_pembayaran="in_pembayaran"></KomponenTablePembayaran>
   </div>
</template>
<script>
import KomponenTigaBox from "./komponen/komponen_3_box.vue";
import KomponenDataClient from "./komponen/komponen_data_client.vue";
import KomponenTablePembayaran from "../pembayaran/komponen/komponen_table_pembayaran.vue";
export default {
   components: { KomponenTigaBox, KomponenTablePembayaran, KomponenDataClient },
   data() {
      return {
         kd_client_key: "",
         in_pembayaran_terakhir: "",
         in_pembayaran: "",
         in_client_key: ""
      };
   },
   mounted() {
      this.kd_client_key = this.$router.currentRoute.params.kd_client_key;
      this.load_client();
   },
   methods: {
      load_client() {
         this.$Progress.start();
         axios
            .get(this.$api_client_key(this.kd_client_key))
            .then(respon => {
               this.in_client_key = respon.data.in_client_key;
               this.load_pembayaran_akhir();
               this.load_pembayaran_base_on_client_id();
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },
      load_pembayaran_akhir() {
         this.$Progress.start();
         axios
            .get(this.$api_pembayaran("filter/pembayaran-akhir"), {
               params: {
                  on: this.in_client_key[0]["Client ID"]
               }
            })
            .then(respon => {
               this.in_pembayaran_terakhir = respon.data.in_pembayran_terakhir;
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },
      load_pembayaran_base_on_client_id() {
         this.$Progress.start();
         axios
            .get(this.$api_pembayaran(), {
               params: {
                  on: this.in_client_key[0]["Client ID"]
               }
            })
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