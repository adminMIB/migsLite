<?php

namespace App\Http\Controllers\API\Nicepay\VirtualAccount;

use App\Services\Response\ResponseService;
use App\Services\VersioningApiService;

trait VirtualAccount
{
    public $aggregrator = "NICEPAY";
    public $chanel = "va";
    public $bankCode = [
        [
            "key_chanel" => "BMRI",
            "nama_chanel" => "Bank Mandiri"
        ],
        [
            "key_chanel" => "IBBK",
            "nama_chanel" => "Bank International Indonesia Maybank"
        ],
        [
            "key_chanel" => "BBBA",
            "nama_chanel" => "Bank Permata"
        ],
        [
            "key_chanel" => "BBBB",
            "nama_chanel" => "Bank Permata Syariah"
        ],
        [
            "key_chanel" => "CENA",
            "nama_chanel" => "Bank Central Asia"
        ],
        [
            "key_chanel" => "BNIN",
            "nama_chanel" => "Bank Negara Indonesia 46"
        ],
        [
            "key_chanel" => "HNBN",
            "nama_chanel" => "Bank KEB Hana Indonesia"
        ],
        [
            "key_chanel" => "BRIN",
            "nama_chanel" => "Bank Rakyat Indonesia"
        ],
        [
            "key_chanel" => "BNIA",
            "nama_chanel" => "Bank PT. BANK CIMB NIAGA, TBK."
        ],
        [
            "key_chanel" => "BDIN",
            "nama_chanel" => "Bank PT. BANK DANAMON INDONESIA, TBK"
        ],
        [
            "key_chanel" => "PDJB",
            "nama_chanel" => "Bank BJB"
        ],
    ];

    public function daftarBankTersedia()
    {
        $kode_bank = [];
        foreach ($this->bankCode as  $value) {
            $kode_bank[] = [
                "nama_chanel" => $value["nama_chanel"],
                "key_chanel" => $value["key_chanel"],
                "aggregrator" => "NICEPAY",
                "chanel" => "va"
            ];
        }
        return ResponseService::get(VersioningApiService::version_1_0(), $kode_bank);
    }
}
