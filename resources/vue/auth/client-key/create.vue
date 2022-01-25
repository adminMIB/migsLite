
<template>
   <div>
      <kembali></kembali>
      <div class="bg-white rounded border">
         <div class="container">
            <div class="row py-3 border-bottom">
               <div class="col-sm">
                  <div class="font-weight-bolder">Tambah Client Key</div>
               </div>
            </div>
         </div>
         <div class="py-2 container">
            <form @submit.prevent="kd_konsumer_key == null ? add() : update() ">
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
               <button class="btn btn-block btn-dark" type="submit">Simpan Client Key</button>
            </form>
         </div>
         <section v-if="isAdded" class="container">
            <div class="border p-2 m-2 rounded">
               <div class="alert alert-success" role="alert">
                  <h5 class="font-weight-bolder">
                     <i class="fa fa-info-circle mr-2" aria-hidden="true"></i> Mohon untuk simpan data client-secret ini, karna hanya akan di tampilkan sekali
                  </h5>
               </div>
               <table>
                  <thead>
                     <tr>
                        <th>Client-id</th>
                        <td>{{client_data.client_key_id}}</td>
                     </tr>
                     <tr>
                        <th>Client-secret</th>
                        <td>{{client_data.client_key_secret_unhashed}}</td>
                     </tr>
                  </thead>
               </table>
            </div>
         </section>
      </div>
   </div>
</template>
<script>
export default {
   data() {
      return {
         isAdded: false,
         client_data: [],
         kd_konsumer_key: null,
         in_role: [],
         form: new Form({
            kd_konsumer_key: "",
            client_key_nama: ""
         })
      };
   },
   mounted() {
      if (this.$route.params.kd_konsumer_key) {
         this.kd_konsumer_key = this.$route.params.kd_konsumer_key;
         this.load_edited_data();
      }
   },
   methods: {
      add() {
         this.isAdded = false;
         this.$Progress.start();
         this.$toast.df102();
         this.form
            .post(this.$api_client_key())
            .then(response => {
               this.isAdded = true;
               this.client_data = response.data.in_client_key;
               this.$Progress.finish();
               this.$toast.df200();
               this.form.reset();
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
            .put(this.$api_konsumer_key + "/" + this.kd_konsumer_key)
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
