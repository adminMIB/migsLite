<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AlamatController;
use App\Http\Controllers\API\JenisMemberController;
use App\Http\Controllers\API\KostumerMemberController;
use App\Http\Controllers\API\Nicepay\NicepayController;
use App\Http\Controllers\API\PaymentMethod\PaymentMethodController;
use App\Http\Controllers\API\PaymentService\PaymentServiceController;
use App\Http\Controllers\API\PembayaranController;

Route::resources(["payment-service" => PaymentServiceController::class]);
Route::resources(["payment-method" => PaymentMethodController::class]);

Route::post("nicepay", [NicepayController::class, "register"])->name("index");
Route::post("nicepay/payment/virtual-account", [NicepayController::class, "virtual_account"])->name("nicepay.va");

Route::post("nicepay-notifikasi", [NicepayController::class, "notifikasiPembayaran"])->name("index");

Route::resources(["pembayaran" => PembayaranController::class]);


Route::prefix("nicepay")->name("nicepay.")->group(function () {
    Route::get("mitra-constore", [NicepayController::class, "daftarMitraTersedia"]);
    Route::get("bank-virtual-account", [NicepayController::class, "daftarBankTersedia"]);
});


Route::middleware(['auth:api', "akses"])->group(function () {
    Route::resources(["jenis-member" => JenisMemberController::class]);
    Route::resources(["kostumer-member" => KostumerMemberController::class]);

    Route::prefix("alamat")->name("alamat.")->group(function () {
        Route::post("/provinsi", [AlamatController::class, "provinsi"])->name("provinsi");
        Route::post("/wilayah", [AlamatController::class, "wilayah"])->name("wilayah");
        Route::post("/kecamatan", [AlamatController::class, "kecamatan"])->name("kecamatan");
        Route::post("/kelurahan", [AlamatController::class, "kelurahan"])->name("kelurahan");
        Route::post("/kodepos", [AlamatController::class, "kode_pos"])->name("kode_pos");
        Route::get("/negara", [AlamatController::class, "negara"])->name("negara");
    });
});


// JANGAN LUPA amr:getAllRoutes setiap nambahin route
// JANGAN LUPA KASIH ROUTE NAME AS JIKA ROUTE BUKAN RESOURCE
// NAMA ROUTE YANG HANYA AKAN DI TAMPILKAN PADA MANAJEMEN SIDEBAR HANYA YANG 
//   INDEX DAN CREATE MAKA HATI HATI DALAM MEMBUAT ROUTE  
