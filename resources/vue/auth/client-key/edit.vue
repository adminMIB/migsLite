
<template>
   <div>
      <kembali></kembali>
      <div class="bg-white rounded border">
         <div class="container">
            <div class="row py-3 border-bottom">
               <div class="col-sm">
                  <div class="font-weight-bolder">Edit Client Key</div>
               </div>
            </div>
         </div>
         <div class="py-2 container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               <strong>Merubah Nama client tidak akan merubah data key</strong>
            </div>

            <form @submit.prevent="update ">
               <table class="table table-borderless">
                  <thead>
                     <tr>
                        <th class="px-3 align-middle">Nama Client Key</th>
                        <td class="px-3 align-middle">
                           <input
                              type="text"
                              v-model="form.client_key_nama"
                              required
                              class="form-control"
                              id="nama"
                              maxlength="50"
                              minlength="1"
                           />
                           <div
                              class="text-red"
                              v-if="form.errors.has('client_key_nama')"
                              v-html="form.errors.get('client_key_nama')"
                           />
                        </td>
                     </tr>
                  </thead>
               </table>
               <button class="btn btn-block btn-dark" type="submit">Ubah Nama Client</button>
            </form>
         </div>
      </div>
   </div>
</template>
<script>
export default {
   data() {
      return {
         isAdded: false,
         client_data: [],
         kd_client_key: null,
         in_role: [],
         form: new Form({
            kd_client_key: "",
            client_key_nama: ""
         })
      };
   },
   mounted() {
      this.kd_client_key = this.$router.currentRoute.params.kd_client_key;
      this.load_edited_data();
   },
   methods: {
      load_edited_data() {
         this.$Progress.start();
         axios
            .get(this.$api_client_key(this.kd_client_key))
            .then(respon => {
               this.form.client_key_nama =
                  respon.data.in_client_key[0]["Nama Client"];
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },

      update() {
         this.$Progress.start();
         this.$toast.df102();
         this.form
            .put(this.$api_client_key(this.kd_client_key))
            .then(() => {
               this.$Progress.finish();
               this.$toast.df200();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      }
   }
};
</script>
