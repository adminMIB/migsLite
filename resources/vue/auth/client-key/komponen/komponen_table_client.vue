<template>
   <div class="my-1 bg-white rounded elevation-2 table-responsive">
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
            </tr>
         </tbody>
      </table>
      <div class="container">
         <pagination :data="in_client_key" @pagination-change-page="pagination"></pagination>
      </div>
   </div>
</template>
<script>
export default {
   props: ["in_client_key"],
   data() {
      return {};
   },
   mounted() {},
   methods: {
      pagination(page = 1) {
         nv.$emit("index-clientkey-pagination", page);
      }
   }
};
</script>