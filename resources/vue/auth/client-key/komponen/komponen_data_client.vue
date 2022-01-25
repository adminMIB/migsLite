<template>
   <div style="margin-bottom:-13px">
      <div class="row">
         <div class="col-sm-8">
            <div class="mt-2">
               <div class="bg-white elevation-2 rounded">
                  <table
                     class="table table-sm table-borderless"
                     v-for=" (client,key,i) in in_client_key"
                     :key="i"
                  >
                     <thead>
                        <tr v-for=" (data,key_data,i_data) in client" :key="i_data">
                           <th width="200">{{key_data}}</th>
                           <td>: {{data}}</td>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
         <div class="col-sm">
            <div class="mt-2">
               <div class="bg-white p-2 elevation-2 rounded text-center">
                  <div>
                     Transaksi Terakhir :
                     <h5 class="font-weight-bolder">{{in_pembayaran_terakhir["Waktu Pembayaran"]}}</h5>
                  </div>
                  <hr />
                  <div>
                     Jumlah Pembayaran :
                     <h5 class="font-weight-bolder">{{in_pembayaran_terakhir["Jumlah Pembayaran"]}}</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
   props: ["in_pembayaran_terakhir", "in_client_key"],
   data() {
      return {};
   },
   mounted() {},
   methods: {}
};
</script>