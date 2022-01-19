<?php

namespace App\Http\Controllers\API\Artajasa\Signal;

use App\Http\Controllers\API\Artajasa\ArtajasaHttp;

class SignalService
{
    public function mendapatkanInquiry($request)
    {
        ArtajasaHttp::setEndpoint("inquiry");
        $fixed_request = SignalRequestConverter::inquiry($request->all());
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        return SignalResponsetConverter::inquiry($response);
    }


    public function memuatPembayaran($request)
    {
        ArtajasaHttp::setEndpoint("payment");
        $fixed_request = SignalRequestConverter::payment($request->all());
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        return SignalResponsetConverter::payment($response);
    }
}
