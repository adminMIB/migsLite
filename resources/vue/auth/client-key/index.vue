<template>
   <div>
      <h5>Data Client</h5>
      <TableClientKey :in_client_key="in_client_key"></TableClientKey>
   </div>
</template>
<script>
import TableClientKey from "./komponen/komponen_table_client.vue";

export default {
   components: { TableClientKey },
   data() {
      return {
         in_client_key: {}
      };
   },
   mounted() {
      this.load_client_key();
      nv.$on("index-clientkey-pagination", data => {
         this.emit_on_pagination(data);
      });
      nv.$on("index-clientkey-reload", data => {
         this.load_client_key();
      });
   },
   methods: {
      load_client_key() {
         this.$Progress.start();
         axios
            .get(this.$api_client_key())
            .then(respon => {
               this.in_client_key = respon.data.in_client_key;
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },
      emit_on_pagination(page) {
         this.$Progress.start();
         axios
            .get(this.$api_client_key(), {
               params: {
                  page: page
               }
            })
            .then(respon => {
               this.in_client_key = respon.data.in_client_key;
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
