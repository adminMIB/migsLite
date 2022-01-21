<?php

use App\Http\Controllers\API\ClientKey\ClientKeyController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\PembayaranController;

Route::resources(["pembayaran" => PembayaranController::class]);

// Route::prefix()

Route::controller(ClientKeyController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});

Route::middleware(['auth:api', "akses"])->group(function () {
});


// JANGAN LUPA amr:getAllRoutes setiap nambahin route
// JANGAN LUPA KASIH ROUTE NAME AS JIKA ROUTE BUKAN RESOURCE
// NAMA ROUTE YANG HANYA AKAN DI TAMPILKAN PADA MANAJEMEN SIDEBAR HANYA YANG 
//   INDEX DAN CREATE MAKA HATI HATI DALAM MEMBUAT ROUTE  
