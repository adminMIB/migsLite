<template>
   <div>
      <div class="container">
         <div class="row">
            <div class="col-sm">
               <div class="bg-white p-3 rounded elevation-1">
                  <h4>
                     <i class="fa fa-lock"></i> Ubah Password
                  </h4>
                  <form @submit.prevent="ubah_password">
                     <div class="form-group">
                        <label for>Masukan Password Lama</label>
                        <div class="input-group">
                           <input
                              id="password_lama"
                              type="password"
                              class="form-control"
                              v-model="form.pass_lama"
                              required
                              @keyup="proses_konfirmasi"
                           />
                           <span class="input-group-prepend">
                              <div @click="show_password('lama')" class="p-2 btn als round-right">
                                 <i class="fa fa-eye"></i>
                              </div>
                           </span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for>Masukan Password Baru</label>
                        <div class="input-group">
                           <input
                              id="password_baru"
                              type="password"
                              class="form-control"
                              :class="{'border-success': password_confirmed }"
                              v-model="form.pass_baru"
                              @keyup="proses_konfirmasi"
                              required
                           />

                           <span class="input-group-prepend">
                              <div @click="show_password('baru')" class="p-2 btn als round-right">
                                 <i class="fa fa-eye"></i>
                              </div>
                           </span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for>Konfirmasi Password Baru</label>
                        <div class="input-group">
                           <input
                              id="password_konfirmasi"
                              type="password"
                              class="form-control"
                              :class="{'border-success': password_confirmed }"
                              v-model="form.konfirmasi_pass"
                              @keyup="proses_konfirmasi"
                           />
                           <span class="input-group-prepend">
                              <div
                                 @click="show_password('konfirmasi')"
                                 class="p-2 btn als round-right"
                              >
                                 <i class="fa fa-eye"></i>
                              </div>
                           </span>
                        </div>
                        <span class="text-danger" v-if="password_confirmed === false">
                           <i class="fa fa-exclamation-circle mr-2"></i>
                           Konfirmasi Password dan password lama tidak sama
                        </span>
                     </div>
                     <button
                        type="submit"
                        class="btn btn-outline-primary btn-block"
                        id="btn-ubah-password"
                     >Simpan Perubahan Password</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
export default {
   data() {
      return {
         form: new Form({
            pass_lama: "",
            pass_baru: "",
            konfirmasi_pass: ""
         }),
         typeInput: false,
         password_confirmed: ""
      };
   },
   mounted() {
      titlePage("Ubah Password", "onlyPage");
   },
   methods: {
      ubah_password() {
         this.$toast.df102();
         this.$Progress.start();
         this.form
            .put("api/ubah-password")
            .then(() => {
               this.$Progress.finish();
               this.$toast.df200();
               this.password_confirmed = false;
               this.form.reset();
            })
            .catch(e => {
               this.$Progress.fail();
               if (e.response.status == 400) {
                  Swal.fire({
                     icon: "warning",
                     title: e.response.data.message
                  });
               }
            });
      },
      show_password(id) {
         this.typeInput = !this.typeInput;
         if (this.typeInput) {
            $("#password_" + id).attr("type", "text");
         } else {
            $("#password_" + id).attr("type", "password");
         }
      },
      proses_konfirmasi() {
         if (
            this.form.pass_baru == this.form.konfirmasi_pass &&
            this.form.pass_baru != ""
         ) {
            this.password_confirmed = true;
            $("#btn-ubah-password").attr("disabled", false);
         } else {
            this.password_confirmed = false;
            $("#password_konfirmasi").addClass("border-danger");
            $("#password_baru").addClass("border-danger");
            $("#btn-ubah-password").attr("disabled", "true");
         }
      }
   }
};
</script>
