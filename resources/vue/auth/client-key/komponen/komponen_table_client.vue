<template>
   <div class="my-1 bg-white rounded elevation-2">
      <ModalClientSecret></ModalClientSecret>
      <table class="table table-sm table-hover">
         <thead>
            <tr class="text-center">
               <th width="25">#</th>
               <th>Nama</th>
               <th>Client-ID</th>
               <th>Status</th>
               <th>Tgl.Dibuat</th>
               <th width="25">
                  <i class="fa fa-eye" aria-hidden="true"></i>
               </th>
               <th width="25"></th>
            </tr>
         </thead>
         <tbody>
            <tr v-for="(client_key,i) in in_client_key.data" :key="i" class="text-center">
               <td>{{i+1}}</td>
               <td>{{client_key.client_key_nama}}</td>
               <td>{{client_key.client_key_id}}</td>
               <td>{{client_key.client_key_status}}</td>
               <td>{{$dayjs(client_key.created_at).format("DD MMM YYYY")}}</td>
               <td class="text-center">
                  <router-link
                     :to="{name:'client-key.show',params:{
                     kd_client_key : client_key.kd_client_key
                  }}"
                     class="btn btn-sm btn-block btn-outline-primary"
                  >
                     <i class="fa fa-eye" aria-hidden="true"></i>
                  </router-link>
               </td>
               <td>
                  <div class="btn-group">
                     <button class="btn btn-sm" type="button" data-toggle="dropdown">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right">
                        <router-link
                           class="dropdown-item"
                           :to="{ name:'client-key.update', params: {
                              kd_client_key  : client_key.kd_client_key
                           }}"
                        >Edit</router-link>
                        <a
                           class="dropdown-item"
                           href="#"
                           @click="reset_client_key(client_key.kd_client_key)"
                        >Reset Client Key</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Status</h6>
                        <a
                           class="dropdown-item"
                           href="#"
                           @click="status('activated', client_key.kd_client_key)"
                        >Aktivasi</a>
                        <a
                           class="dropdown-item"
                           href="#"
                           @click="status('deactivated', client_key.kd_client_key)"
                        >Deaktivasi</a>
                        <h6 class="dropdown-header text-danger">Warning</h6>
                        <a
                           class="dropdown-item"
                           href="#"
                           @click="destroy(client_key.kd_client_key)"
                        >Hapus</a>
                     </div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="container">
         <pagination :data="in_client_key" @pagination-change-page="pagination"></pagination>
      </div>
   </div>
</template>
<script>
import ModalClientSecret from "./komponen_modal_reset_client.vue";
export default {
   components: { ModalClientSecret },
   props: ["in_client_key"],
   data() {
      return {
         client_secret_baru: ""
      };
   },
   mounted() {},
   methods: {
      status(data, kd_client_key) {
         this.$toast.df102();
         axios
            .put(this.$api_client_key(`${data}/${kd_client_key}`))
            .then(() => {
               this.$toast.df200();
               nv.$emit("index-clientkey-reload");
            })
            .catch(e => {
               this.$error.catch(e);
            });
      },
      pagination(page = 1) {
         nv.$emit("index-clientkey-pagination", page);
      },

      reset_client_key(kd_client_key) {
         alertKonfirmasi.fire().then(result => {
            if (result.isConfirmed) {
               this.$toast.df102();
               axios
                  .put(this.$api_client_key(`reset-client/${kd_client_key}`))
                  .then(reseponse => {
                     this.$toast.df200();
                     this.client_secret_baru =
                        reseponse.data.client_key_secret_unhashed;
                     $("#reset-client-show").modal("show");
                     $("#client_secret_baru").text(this.client_secret_baru);
                  })
                  .catch(e => {
                     this.error.catch(e);
                  });
            }
         });
      },

      destroy(kd_client_key) {
         konfirmasiHapus.fire().then(result => {
            if (result.isConfirmed) {
               this.$toast.df102();
               axios
                  .delete(this.$api_client_key(kd_client_key))
                  .then(() => {
                     this.$toast.df200();
                     nv.$emit("index-clientkey-reload");
                  })
                  .catch(e => {
                     this.error.catch(e);
                  });
            }
         });
      }
   }
};
</script>