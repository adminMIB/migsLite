<template>
   <div class="my-1 bg-white p-2 rounded elevation-2 table-responsive">
      <table class="table table-sm table-hover">
         <thead>
            <tr>
               <th width="25" class="text-center">#</th>
               <th class="text-center">Metode</th>
               <th class="text-center">Instansi</th>
               <th class="text-center">Invoice</th>
               <th class="text-center">Jumlah</th>
               <th class="text-center">Status</th>
               <th width="25" class="text-center">
                  <i class="fa fa-eye" aria-hidden="true"></i>
               </th>
            </tr>
         </thead>
         <tbody>
            <tr v-for="(pembayaran,i) in in_pembayaran.data" :key="i">
               <td>{{i+1}}</td>
               <td>{{pembayaran.metode_pembayaran}}</td>
               <td>{{pembayaran.instansi_pembayaran}}</td>
               <td>{{pembayaran.invoice_pembayaran}}</td>
               <td>{{pembayaran.jumlah_dibayarkan}}</td>
               <td>{{pembayaran.status_pembayaran}}</td>
               <td class="text-center">
                  <button class="btn btn-sm btn-block btn-outline-primary">
                     <i class="fa fa-eye" aria-hidden="true"></i>
                  </button>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</template>
<script>
export default {
   props: ["in_pembayaran"],
   data() {
      return {};
   },
   mounted() {},
   methods: {}
};
</script>