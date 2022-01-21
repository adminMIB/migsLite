<?php

namespace App\Http\Controllers\API\Nicepay\Service;



trait InitDataToNicepayTrait
{
    public static $fixedDataNicepay = [];
    public static $initializeDataToNicepay = [
        "nama_kostumer" => "billingNm",
        "phone_kostumer" => "billingPhone",
        "email_kostumer" => "billingEmail",
        "nama_pembayaran" => "goodsNm",
        "metode_pembayaran" => "payMethod",
        "jumlah_pembayaran" => "amt",
        "kode_mitra" => "mitraCd",
        "kode_bank" => "bankCd",
    ];
}
