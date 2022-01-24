<template>
   <div class="my-1">
      <div class="row">
         <div class="col">
            <div class="rounded-right text-center bg-white elevation-2">
               <div class="bg-d-blue rounded text-left">
                  <div class="h6 font-weight-bolder p-2">Hari ini</div>
               </div>
               <div class="p-2">
                  <div class="row">
                     <div class="col">
                        <div>Total</div>
                        <h5 class="font-weight-bolder">{{299}}</h5>
                     </div>
                     <div class="col">
                        <div>Jumlah</div>
                        <h5 class="font-weight-bolder">{{1000000 | IDR}}</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="rounded-right text-center bg-white elevation-2">
               <div class="bg-d-blue rounded text-left">
                  <div class="h6 font-weight-bolder p-2">Jumlah Transaksi</div>
               </div>
               <div class="p-2">
                  <div>Jumlah</div>
                  <h5 class="font-weight-bolder">{{1000000 | IDR}}</h5>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="rounded-right text-center bg-white elevation-2">
               <div class="bg-d-blue rounded text-left">
                  <div class="h6 font-weight-bolder p-2">Total Transaksi</div>
               </div>
               <div class="p-2">
                  <div>Total</div>
                  <h5 class="font-weight-bolder">{{299}}</h5>
               </div>
            </div>
         </div>
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
   methods: {}
};
</script>