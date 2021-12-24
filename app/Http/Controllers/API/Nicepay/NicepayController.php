<?php

namespace App\Http\Controllers\API\Nicepay;

use Illuminate\Http\Request;
use App\Services\VersioningApiService;
use App\Services\PaymentGateaway\Nicepay\Nicepay;
use App\Services\Response\Nicepay\ConStoreResponse;
use App\Http\Controllers\API\Nicepay\ConvienceStore\ConvienceStore;
use App\Http\Controllers\API\Nicepay\VirtualAccount\VirtualAccount;

class NicepayController
{
    use PaymentMethod, ConvienceStore, VirtualAccount;

    public function register(Request $request)
    {
        // dd(Nicepay::register($request));
        return ConStoreResponse::get(VersioningApiService::version_1_0(), Nicepay::register($request));
    }
}
