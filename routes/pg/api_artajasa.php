<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Artajasa\ArtajasaController;
use App\Http\Controllers\API\Artajasa\Signal\SignalController;

Route::prefix("artajasa")->group(function () {

    Route::prefix("signal")->name("signal.")->group(function () {
        Route::post("inquiry", [SignalController::class, "inquiry"])->name("inquiry");
        Route::post("payment", [SignalController::class, "payment"])->name("payment");
    });
    
    Route::name("artajasa.")->group(function () {
        Route::post("inquiry", [ArtajasaController::class, "inquiry"])->name("inquiry");
        Route::post("payment", [ArtajasaController::class, "payment"])->name("payment");
        Route::post("status", [ArtajasaController::class, "status"])->name("status");
        Route::post("reversal", [ArtajasaController::class, "reversal"])->name("reversal");
    });
});
