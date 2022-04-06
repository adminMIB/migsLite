<?php

use App\Http\Middleware\ClientKeyMiddleware;
use Illuminate\Support\Facades\Route;


Route::prefix("jet_express")->name("jet_express.")->group(function () {
    Route::post("check_tarif", [\App\Http\Controllers\API\JetExpress\JetExpressController::class, "get_tarif"])
        ->name("get_tarif")
        ->middleware(ClientKeyMiddleware::class)
    ;

    Route::post("generate_awb", [\App\Http\Controllers\API\JetExpress\JetExpressController::class, "generateAwb"])
        ->name("generate_awb")
        ->middleware(ClientKeyMiddleware::class);

    Route::post("cancle_order", [\App\Http\Controllers\API\JetExpress\JetExpressController::class, "cancelOrder"])
        ->name("cancle_order")
        ->middleware(ClientKeyMiddleware::class);

    Route::post("tracking", [\App\Http\Controllers\API\JetExpress\JetExpressController::class, "getTracking"])
        ->name("tracking");
        // ->middleware(ClientKeyMiddleware::class);
});
