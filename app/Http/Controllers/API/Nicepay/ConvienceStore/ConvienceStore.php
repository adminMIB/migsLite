<?php

namespace App\Http\Controllers\API\Nicepay\ConvienceStore;

use App\Services\Response\ResponseService;
use App\Services\VersioningApiService;

trait ConvienceStore
{
    public $mitraCode = [
        [
            "key_chanel" => "ALMA",
            "nama_chanel" => "Alfamart",
        ],
        [
            "key_chanel" => "INDO",
            "nama_chanel" => "Indomaret",
        ]
    ];

    public function daftarMitraTersedia()
    {
        $mitraCode = [];
        foreach ($this->mitraCode as  $value) {
            $mitraCode[] = [
                "nama_chanel" => $value["nama_chanel"],
                "key_chanel" => $value["key_chanel"],
                "aggregrator" => "NICEPAY",
                "chanel" => "cvs"
            ];
        }
        return ResponseService::get(VersioningApiService::version_1_0(), $mitraCode);
    }
}
