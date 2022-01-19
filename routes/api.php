<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Nicepay\NicepayController;
use App\Http\Controllers\API\PaymentService\PaymentServiceController;
use App\Http\Controllers\API\PembayaranController;

Route::resources(["payment-service" => PaymentServiceController::class]);
Route::post("nicepay-notifikasi", [NicepayController::class, "notifikasiPembayaran"])->name("index");

Route::resources(["pembayaran" => PembayaranController::class]);

Route::middleware(['auth:api', "akses"])->group(function () {
});


// JANGAN LUPA amr:getAllRoutes setiap nambahin route
// JANGAN LUPA KASIH ROUTE NAME AS JIKA ROUTE BUKAN RESOURCE
// NAMA ROUTE YANG HANYA AKAN DI TAMPILKAN PADA MANAJEMEN SIDEBAR HANYA YANG 
//   INDEX DAN CREATE MAKA HATI HATI DALAM MEMBUAT ROUTE  
