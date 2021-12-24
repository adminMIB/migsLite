<?php

namespace App\Http\Controllers\API\Nicepay\VirtualAccount;

use App\Services\Response\ResponseService;
use App\Services\VersioningApiService;

trait VirtualAccount
{
    public $bankCode = [
        "BMRI" => "Bank Mandiri",
        "IBBK" => "Bank International Indonesia Maybank",
        "BBBA" => "Bank Permata",
        "BBBB" => "Bank Permata Syariah",
        "CENA" => "Bank Central Asia",
        "BNIN" => "Bank Negara Indonesia 46",
        "HNBN" => "Bank KEB Hana Indonesia",
        "BRIN" => "Bank Rakyat Indonesia",
        "BNIA" => "Bank PT. BANK CIMB NIAGA, TBK.",
        "BDIN" => "Bank PT. BANK DANAMON INDONESIA, TBK",
        "PDJB" => "Bank BJB",
    ];

    public function daftarBankTersedia()
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->bankCode);
    }
}
