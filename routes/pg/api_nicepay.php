<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Nicepay\NicepayController;


Route::prefix("nicepay")->name("nicepay.")->group(function () {
    Route::get("mitra-constore", [NicepayController::class, "daftarMitraTersedia"])->name("ready.cvs");
    Route::get("bank-virtual-account", [NicepayController::class, "daftarBankTersedia"])->name("ready.va");
    Route::post("payment/virtual-account", [NicepayController::class, "virtual_account"])->name("payment.va");
    Route::post("payment/convenience-store", [NicepayController::class, "convenience_store"])->name("payment.cvs");
    Route::post("notifikasi", [NicepayController::class, "notifikasiPembayaran"])->name("index");
});
