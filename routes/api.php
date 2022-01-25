<?php

use App\Http\Controllers\API\ClientKey\ClientKeyController;
use App\Http\Controllers\API\Pembayaran\PembayaranTransaksiController;
use Illuminate\Support\Facades\Route;


// Route::resources(["pembayaran" => PembayaranTransaksiController::class]);

Route::controller(PembayaranTransaksiController::class)
    ->prefix("pembayaran")->name("pembayaran.")->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/search", "search")->name("search");
        Route::get("/detail/{kd_pembayaran}", "show")->name("show");
        Route::get("/filter/hari-ini", "hariIni")->name("hari-ini");
        Route::get("/filter/diterima", "seluruhDataDiterima")->name("diterima");
        Route::get("/filter/pending", "seluruhDataPending")->name("pending");
        Route::get("/filter/pembayaran-akhir", "pembayaranAkhir")->name("terakhir");
    });

Route::controller(ClientKeyController::class)->prefix("client-key")->name("client-key.")->group(function () {
    Route::get('/', 'index')->name("index");
    Route::post('/', 'store')->name("store");
    Route::get('/{kd_client_key}', 'show')->name("show");
    Route::put('/{kd_client_key}', 'update')->name("update");
    Route::put('/activated/{kd_client_key}', 'activate')->name("activate");
    Route::put('/deactivated/{kd_client_key}', 'deactivate')->name("deactivate");
    Route::get('/search', 'search')->name("search");
});

Route::middleware(['auth:api', "akses"])->group(function () {
});


// JANGAN LUPA amr:getAllRoutes setiap nambahin route
// JANGAN LUPA KASIH ROUTE NAME AS JIKA ROUTE BUKAN RESOURCE
// NAMA ROUTE YANG HANYA AKAN DI TAMPILKAN PADA MANAJEMEN SIDEBAR HANYA YANG 
//   INDEX DAN CREATE MAKA HATI HATI DALAM MEMBUAT ROUTE  
