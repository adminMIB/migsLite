
<template>
   <div>
      <kembali></kembali>
      <div class="bg-white rounded border">
         <div class="container">
            <div class="row py-3 border-bottom">
               <div class="col-sm">
                  <div class="font-weight-bolder">Kelola Audit Trail</div>
               </div>
            </div>
         </div>
         <div class="py-2 container">
            <form @submit.prevent="id == null ? add() : update() ">
               <table class="table table-borderless">
                  <tr>
                     <th class="px-3 align-middle">fk_kd_user</th>
                     <td class="px-3 align-middle">
                        <input
                           type="number"
                           v-model="form.fk_kd_user"
                           required
                           class="form-control"
                           id="fk_kd_user"
                           maxlength="11"
                           minlength="1"
                        />
                     </td>
                  </tr>
                  <tr>
                     <th class="px-3 align-middle">Nama Form</th>
                     <td class="px-3 align-middle">
                        <input
                           type="text"
                           v-model="form.nama_form"
                           required
                           class="form-control"
                           id="nama_form"
                           maxlength="100"
                           minlength="1"
                        />
                     </td>
                  </tr>
                  <tr>
                     <th class="px-3 align-middle">Nama Field</th>
                     <td class="px-3 align-middle">
                        <input
                           type="text"
                           v-model="form.nama_field"
                           required
                           class="form-control"
                           id="nama_field"
                           maxlength="100"
                           minlength="1"
                        />
                     </td>
                  </tr>
                  <tr>
                     <th class="px-3 align-middle">Value Sebelumnya</th>
                     <td class="px-3 align-middle">
                        <input
                           type="text"
                           v-model="form.value_sebelumnya"
                           required
                           class="form-control"
                           id="value_sebelumnya"
                           maxlength="200"
                           minlength="1"
                        />
                     </td>
                  </tr>
                  <tr>
                     <th class="px-3 align-middle">Value Terbaru</th>
                     <td class="px-3 align-middle">
                        <input
                           type="text"
                           v-model="form.value_terbaru"
                           required
                           class="form-control"
                           id="value_terbaru"
                           maxlength="200"
                           minlength="1"
                        />
                     </td>
                  </tr>
                  <tr>
                     <th class="px-3 align-middle">jenis_kegiatan</th>
                     <td class="px-3 align-middle">
                        <input
                           type="text"
                           v-model="form.jenis_kegiatan"
                           required
                           class="form-control"
                           id="jenis_kegiatan"
                           maxlength="10"
                           minlength="1"
                        />
                     </td>
                  </tr>
               </table>
               <button class="btn btn-block btn-dark" type="submit">Simpan Audit Trail</button>
            </form>
         </div>
      </div>
   </div>
</template>
<script>
export default {
   data() {
      return {
         id: null,
         form: new Form({
            id: "",
            fk_kd_user: "",
            nama_form: "",
            nama_field: "",
            value_sebelumnya: "",
            value_terbaru: "",
            jenis_kegiatan: ""
         })
      };
   },
   mounted() {
      if (this.$route.params.id) {
         this.id = this.$route.params.id;
         this.load_audit_trail();
      }
   },
   methods: {
      load_audit_trail() {
         this.$Progress.start();
         axios
            .get("/api/audit-trail/" + this.id)
            .then(respon => {
               this.$Progress.finish();
               this.form.fill(respon.data.in_audit_trail);
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },
      add() {
         this.$Progress.start();
         this.$toast.df102();
         this.form
            .post("/api/audit-trail")
            .then(() => {
               this.$Progress.finish();
               this.$toast.df200();
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
            .put("/api/audit-trail/" + this.id)
            .then(() => {
               this.$Progress.finish();
               this.$toast.df200();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      },

      //if there hase image  upload
      to_base64(e) {
         let file = e.target.files[0];
         let id = e.target.id;
         this.preview = URL.createObjectURL(file);
         let file_reader = new FileReader();
         if (file["size"] / 1024 < 2048) {
            file_reader.onloadend = file => {
               this.form[id] = file_reader.result;
            };
            file_reader.readAsDataURL(file);
         } else {
            window.gambarRule.fire();
         }
      }
   }
};
</script>
