<?php

namespace App\Http\Controllers\API\Nicepay\ConvienceStore;

use App\Services\Response\ResponseService;
use App\Services\VersioningApiService;

trait ConvienceStore
{
    public $mitraCode = [
        "ALMA" => "Alfamart",
        "INDO" => "Indomaret",
    ];

    public function daftarMitraTersedia()
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->mitraCode);
    }
}
