<template>
   <div class="text-center container">
      <h3 class="font-weight-bolder">New Amrullah Apps Dev Boiler</h3>
      <hr />
      <div class="row">
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>Progress Bar</label>
               <br />
               <button @click="$Progress.start()" class="m-1 btn btn-primary">Prgress Start</button>
               <button @click="progress_finish" class="m-1 btn btn-success">Prgress Finish</button>
               <button @click="progress_fail" class="m-1 btn btn-danger">Prgress Fail</button>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>Toast Group</label>
               <br />
               <button @click="$toast.df102()" class="m-1 btn btn-primary">Loading</button>
               <button @click="$toast.df200()" class="m-1 btn btn-success">Success</button>
               <button @click="$toast.df500()" class="m-1 btn btn-warning">Test HTTP 500</button>
               <button @click="$error.catch()" class="m-1 btn btn-danger">Catch Error</button>
               <button @click="konfirmasi_hapus" class="m-1 btn btn-dark">Delete Confirmation</button>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>Test Vuext Setter Getter</label>
               <h1>{{ count }}</h1>
               <button class="m-1 btn btn-primary" @click="$store.commit('INCREMENT')">INCREMENT</button>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>Default Component</label>
               <div>
                  <kembali></kembali>
               </div>
               <div>
                  <loading></loading>
               </div>
               <div>
                  <kosong></kosong>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>V-Money Input</label>
               <div>
                  <money class="form-control" v-model="value_input"></money>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>V-Carouse</label>
               <div>
                  <carousel :per-page="1" :mouse-drag="true">
                     <slide>
                        <div class="bg-secondary text-white p-3">Slide 1 Content</div>
                     </slide>
                     <slide>
                        <div class="bg-secondary text-white p-3">Slide 2 Content</div>
                     </slide>
                  </carousel>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="m-1 border p-2 bg-white">
               <label for>V-MultiSelect</label>
               <div>
                  <multiselect v-model="value" :options="options"></multiselect>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
import { mapState } from "vuex";

export default {
   data() {
      return {
         in_data: {},
         value: null,
         value_input: "",
         options: ["list", "of", "options"]
      };
   },
   name: "home",
   computed: {
      ...mapState({
         count: state => state.count
      })
   },
   mounted() {},
   methods: {
      konfirmasi_hapus() {
         konfirmasiHapus.fire().then(result => {
            if (result.isConfirmed) {
               this.progress_finish();
               this.$toast.df102();
            }
         });
      },
      progress_finish() {
         this.$Progress.start();
         this.$Progress.finish();
      },
      progress_fail() {
         this.$Progress.start();
         this.$Progress.fail();
      },
      cek(e) {
         console.log(e);
      },
      load() {
         this.$Progress.start();
         axios
            .get("https://shop.hamzahbatik.co.id/api/homepage?aktif=1")
            .then(respon => {
               this.in_data = respon.data.in_section;
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