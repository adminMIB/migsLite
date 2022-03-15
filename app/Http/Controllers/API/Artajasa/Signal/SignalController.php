<?php

namespace App\Http\Controllers\API\Artajasa\Signal;

use App\Http\Controllers\API\Artajasa\ArtajasaService;
use Illuminate\Http\Request;

class SignalController
{

    private SignalService $signalService;

    public function __construct(SignalService $signalService)
    {
        $this->signalService = $signalService;
    }

    public function inquiry(Request $request)
    {
        return $this->signalService->mendapatkanInquiry($request);
    }

    public function payment(Request $request)
    {
        return $this->signalService->memuatPembayaran($request);
    }
}
