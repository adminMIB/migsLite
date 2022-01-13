<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Nicepay\NicepayController;
use App\Http\Controllers\API\PaymentService\PaymentServiceController;
use App\Http\Controllers\API\PembayaranController;

Route::resources(["payment-service" => PaymentServiceController::class]);

Route::post("nicepay-notifikasi", [NicepayController::class, "notifikasiPembayaran"])->name("index");

Route::resources(["pembayaran" => PembayaranController::class]);


Route::middleware(['auth:api', "akses"])->group(function () {
    // Route::prefix("alamat")->name("alamat.")->group(function () {
    //     Route::post("/provinsi", [AlamatController::class, "provinsi"])->name("provinsi");
    //     Route::post("/wilayah", [AlamatController::class, "wilayah"])->name("wilayah");
    //     Route::post("/kecamatan", [AlamatController::class, "kecamatan"])->name("kecamatan");
    //     Route::post("/kelurahan", [AlamatController::class, "kelurahan"])->name("kelurahan");
    //     Route::post("/kodepos", [AlamatController::class, "kode_pos"])->name("kode_pos");
    //     Route::get("/negara", [AlamatController::class, "negara"])->name("negara");
    // });
});


// JANGAN LUPA amr:getAllRoutes setiap nambahin route
// JANGAN LUPA KASIH ROUTE NAME AS JIKA ROUTE BUKAN RESOURCE
// NAMA ROUTE YANG HANYA AKAN DI TAMPILKAN PADA MANAJEMEN SIDEBAR HANYA YANG 
//   INDEX DAN CREATE MAKA HATI HATI DALAM MEMBUAT ROUTE  
