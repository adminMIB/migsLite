<template>
   <div class="container">
      <div class="row">
         <div class="col-md"></div>
         <div class="col-md">
            <div
               class="bg-white p-2 rounded bs-1 border elevation-2"
               v-if="registrasi == false"
               :class="{'absolute': registrasi}"
            >
               <div class="p-5 text-center font-weight-bold h3">
                  Selamat Datang
                  <br />
               </div>
               <div class="alert alert-success alert-dismissible fade show" v-if="telah_registrasi">
                  Akun Berhasil di daftarkan
                  <br />silahkan login !
                  <button type="button" class="close" data-dismiss="alert">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="form-group p-2">
                  <form @submit.prevent="login">
                     <div class="form-group">
                        <label for>Username</label>
                        <input
                           type="text"
                           class="form-control form-control-sm"
                           v-model="form.username"
                        />
                     </div>
                     <div class="form-group">
                        <label for>Password</label>
                        <div class="input-group">
                           <input
                              type="password"
                              id="password"
                              class="form-control form-control-sm"
                              v-model="form.password"
                           />
                           <span class="input-group-prepend">
                              <button
                                 class="btn btn-sm als round-right"
                                 @click="show_password"
                                 type="button"
                              >
                                 <i class="fa fa-eye"></i>
                              </button>
                           </span>
                        </div>
                     </div>
                     <div class="form-group">
                        <button class="btn btn-dark btn-block">Login</button>
                     </div>
                     <div class="form-group text-center" v-if="public_registration">
                        Tidak Memiliki Akun ?
                        <div
                           @click="$router.push({name:'registrasi'})"
                           class="cp text-blue"
                        >Registrasi</div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md"></div>
      </div>
   </div>
</template>
<script>
export default {
   components: {},
   data() {
      return {
         registrasi: false,
         telah_registrasi: false,
         typeInput: false,
         public_registration: false,
         form: new Form({
            username: "",
            password: ""
         })
      };
   },
   mounted() {},
   methods: {
      login() {
         this.$toast.df102();
         this.form
            .post("/login")
            .then(() => {
               this.$toast.df200();
               window.location = "/dashboard";
            })
            .catch(e => {
               this.$error.catch(e);
            });
      },
      show_password() {
         this.typeInput = !this.typeInput;
         let password = document.getElementById("password");
         if (this.typeInput) {
            password.setAttribute("type", "text");
         } else {
            password.setAttribute("type", "password");
         }
      }
   }
};
</script>
