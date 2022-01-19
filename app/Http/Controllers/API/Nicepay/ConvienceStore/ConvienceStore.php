<?php

namespace App\Http\Controllers\API\Nicepay\ConvienceStore;

use App\Services\Response\ResponseService;
use App\Services\VersioningApiService;

trait ConvienceStore
{    
    public $aggregrator = "NICEPAY";
    public $chanel = "cvs";

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
        $kode_bank = [];
        foreach ($this->bankCode as  $value) {
            $kode_bank[] = [
                "nama_chanel" => $value["nama_chanel"],
                "key_chanel" => $value["key_chanel"],
                "aggregrator" => $this->aggregrator,
                "chanel" => $this->chanel
            ];
        }
        
        return ResponseService::get(VersioningApiService::version_1_0(), $this->mitraCode);
    }
}
