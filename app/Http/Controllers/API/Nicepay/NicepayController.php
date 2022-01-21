<?php

namespace App\Http\Controllers\API\Nicepay;

use Illuminate\Http\Request;
use App\Models\PembayaranTransaksi;
use App\Http\Controllers\Controller;
use App\Services\VersioningApiService;
use App\Http\Controllers\API\Nicepay\Service\Nicepay;
use App\Http\Requests\ValidasiNicepayRegisterPayment;
use App\Http\Controllers\API\Nicepay\ConvienceStore\ConvienceStore;
use App\Http\Controllers\API\Nicepay\VirtualAccount\VirtualAccount;
use App\Http\Controllers\API\Nicepay\Service\Response\ConStoreResponse;
use App\Http\Controllers\API\Nicepay\Service\Response\VirtualAccResponse;

class NicepayController extends Controller
{
    use PaymentMethod, ConvienceStore, VirtualAccount;

    public function convenience_store(ValidasiNicepayRegisterPayment $request)
    {
        $response = ConStoreResponse::get(VersioningApiService::version_1_0(), Nicepay::register($request));
        return PembayaranTransaksi::create($response["api_data"]);
    }

    public function virtual_account(ValidasiNicepayRegisterPayment $request)
    {
        $response = VirtualAccResponse::get(VersioningApiService::version_1_0(), Nicepay::register($request));
        return PembayaranTransaksi::create($response["api_data"]);
    }


    public function notifikasiPembayaran(Request $request)
    {
        return Nicepay::validasiNotifikasi($request);
    }
}
