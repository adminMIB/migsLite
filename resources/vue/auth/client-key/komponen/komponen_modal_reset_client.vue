<template>
   <div class="modal fade" id="reset-client-show" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Client Secret Baru</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="alert alert-primary" role="alert">
                  <strong>Segera Simpan Client Secret Baru, hanya ditampilkan sekali</strong>
               </div>
               <div class="text-center">
                  <h3 class="font-weight-bolder" id="client_secret_baru"></h3>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
   data() {
      return {};
   },
   mounted() {},
   methods: {}
};
</script>