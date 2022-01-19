<?php

namespace App\Http\Controllers\API\Artajasa;


class ArtajasaController
{
    private ArtajasaService $artajasaService;

    public function __construct(ArtajasaService $artajasaService)
    {
        $this->artajasaService = $artajasaService;
    }

    public function inquiry(Request $request)
    {
        $this->artajasaService->mendapatkanInquiry($request);
    }

    public function payment(Request $request)
    {
        $this->artajasaService->memuatPembayaran($request);
    }

    public function status(Request $request)
    {
        $this->artajasaService->mendapatkanStatus($request);
    }

    public function reversal(Request $request)
    {
        $this->artajasaService->melakukanReversal($request);
    }
}
