<?php

namespace App\Services\Response\Nicepay;

class ConStoreResponse
{
    public static $index = [
        "invoice_pembayaran" => "referenceNo",
        "jumlah_dibayarkan" => "amt",
        "tgl_transaksi" => "transDt",
        "waktu_transaksi" => "transTm",
        "metode_pembayaran" => "mitraCd",
        "nomor_pembayaran" => "payNo" || "vacctNo",
        "tgl_kadaluarsa" => "payValidDt",
        "waktu_kadaluarsa" => "payValidTm"
    ];

    public static $indexError = [
        "kode_error" => "resultCd",
        "pesan_error" => "resultMsg",
    ];


    public static function get($api_version, $api_data)
    {

        $fixed_response = [];
        $dataToLoop =  $api_data["resultCd"] == 0000 ? self::$index  :  self::$indexError;
        foreach ($dataToLoop as $key => $value) {
            $fixed_response[$key] = $api_data[$value];
        }

        return ["api_data" => $fixed_response, "api_version" => $api_version];
    }
}
