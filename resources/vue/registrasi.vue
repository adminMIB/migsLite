<template>
   <div class="container">
      <div class="row">
         <div class="col-md"></div>
         <div class="col-md">
            <div class="bg-white p-2 rounded bs-1 border elevation-2">
               <div class="mt-5 pb-1 text-center font-weight-bold h3">Daftar akun baru</div>
               <div class="form-group p-2">
                  <form @submit.prevent="register">
                     <div class="form-group">
                        <label for>Nama</label>
                        <input
                           type="text"
                           v-model="form.nama"
                           class="form-control form-control-sm"
                           :class="{'is-invalid': form.errors.has('nama')}"
                        />
                     </div>
                     <div class="form-group">
                        <label for>Email</label>
                        <input
                           type="email"
                           v-model="form.email"
                           class="form-control form-control-sm"
                           :class="{'is-invalid': form.errors.has('email')}"
                        />
                     </div>
                     <div class="form-group">
                        <label for>Username</label>
                        <input
                           type="text"
                           class="form-control form-control-sm"
                           v-model="form.username"
                           :class="{'is-invalid' : form.errors.has('username')}"
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
                              :class="{'is-invalid':form.errors.has('password')}"
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
                        <button class="btn btn-dark btn-block">Registrasi Akun</button>
                     </div>
                     <div class="form-group text-center">
                        Sudah memiliki akun ?
                        <div @click="$router.push({name:'login'})" class="cp text-blue">Login</div>
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
   data() {
      return {
         typeInput: false,
         form: new Form({
            nama: "",
            email: "",
            username: "",
            password: ""
         })
      };
   },
   mounted() {},
   methods: {
      register() {
         this.validasiCaptcha();
         this.$toast.df102();
         this.form
            .post("/api/daftar")
            .then(() => {
               this.$toast.df200();
               this.$router.push("/login");
               nv.$emit("telah_registrasi");
            })
            .catch(e => {
               if (e.response.status == 500) {
                  return this.$toast.df500();
               }
            });
      },
      show_password() {
         this.typeInput = !this.typeInput;
         if (this.typeInput) {
            $("#password").attr("type", "text");
         } else {
            $("#password").attr("type", "password");
         }
      }
   }
};
</script>
