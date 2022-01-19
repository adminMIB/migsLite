<?php

namespace App\Http\Controllers\API\Artajasa;

use App\Http\Controllers\API\Artajasa\ArtajasaRequestConverter;
use App\Http\Controllers\API\Artajasa\ArtajasaResponseConverter;


class ArtajasaService
{
    public function mendapatkanInquiry($request)
    {
        ArtajasaHttp::setEndpoint("inquiry");
        $fixed_request = ArtajasaRequestConverter::inquiryRequest($request->all());
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        return ArtajasaResponseConverter::inquiryResponse($response);
    }

    public function memuatPembayaran($request)
    {
        ArtajasaHttp::setEndpoint("payment");
        $fixed_request = ArtajasaRequestConverter::paymentRequest($request->all());
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        return ArtajasaResponseConverter::paymentResponse($response);
    }

    public function mendapatkanStatus($request)
    {
        ArtajasaHttp::setEndpoint("status");
        $fixed_request = ArtajasaRequestConverter::statusRequest($request->all());
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        return ArtajasaResponseConverter::statusResponse($response);
    }

    public function melakukanReversal($request)
    {
        ArtajasaHttp::setEndpoint("reversal");
        $fixed_request = ArtajasaRequestConverter::reversalRequest($request->all());
        $response = ArtajasaHttp::http()->post($fixed_request)->apply()->json();
        return
         ArtajasaResponseConverter::reversalResponse($response);
    }
}
