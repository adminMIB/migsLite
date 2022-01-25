<template>
   <div class="my-1 bg-white p-2 rounded elevation-2 table-responsive">
      <table class="table table-sm table-hover">
         <thead>
            <tr class="text-center">
               <th width="25">#</th>
               <th>Metode</th>
               <th>Instansi</th>
               <th>Invoice</th>
               <th>Jumlah</th>
               <th>Status</th>
               <th>Client</th>
               <th width="25">
                  <i class="fa fa-eye" aria-hidden="true"></i>
               </th>
            </tr>
         </thead>
         <tbody>
            <tr v-for="(pembayaran,i) in in_pembayaran.data" :key="i" class="text-center">
               <td>{{i+1}}</td>
               <td>{{pembayaran.metode_pembayaran}}</td>
               <td>{{pembayaran.instansi_pembayaran}}</td>
               <td>{{pembayaran.invoice_pembayaran}}</td>
               <td>{{pembayaran.jumlah_dibayarkan | IDR}}</td>
               <td>{{pembayaran.status_pembayaran}}</td>
               <td class="small">{{pembayaran.mendapatkan_data_client ? pembayaran.mendapatkan_data_client.client_key_nama : "-" }}</td>
               <td class="text-center">
                  <button class="btn btn-sm btn-block btn-outline-primary">
                     <i class="fa fa-eye" aria-hidden="true"></i>
                  </button>
               </td>
            </tr>
         </tbody>
      </table>

      <pagination :data="in_pembayaran" @pagination-change-page="pagination"></pagination>
   </div>
</template>
<script>
export default {
   props: ["in_pembayaran"],
   data() {
      return {};
   },
   mounted() {},
   methods: {
      pagination(page = 1) {
         nv.$emit("index-pembayaran-pagination", page);
      }
   }
};
</script>