<?php

namespace App\Http\Controllers\API\Nicepay\Service\Response;

use App\Http\Controllers\API\Nicepay\PaymentMethod;
use App\Http\Controllers\Controller;

class ConStoreResponse extends Controller
{
    use PaymentMethod;

    public static $nama_cvs = [
        "ALMA" => "Alfamart",
        "INDO" => "Indomaret",
    ];

    public static $index = [
        "invoice_pembayaran" => "referenceNo",
        "jumlah_dibayarkan" => "amt",
        "tgl_transaksi" => "transDt",
        "waktu_transaksi" => "transTm",
        "metode_pembayaran" => "payMethod",
        "kode_cvs" => "mitraCd",
        "nama_pembayaran" => "goodsNm",
        "cvs" => "payNo",
        "tgl_kadaluarsa" => "payValidDt",
        "waktu_kadaluarsa" => "payValidTm",
        "kode_unik_payment_gateaway" => "tXid"
    ];

    public static $indexError = [
        "kode_error" => "resultCd",
        "pesan_error" => "resultMsg",
    ];


    public static function get($api_version, $api_data)
    {
        $setup_custom_response = [];
        $dataToLoop =  $api_data["resultCd"] == 0000 ? self::$index  :  self::$indexError;

        foreach ($dataToLoop as $key => $value) {
            $setup_custom_response[$key] = $api_data[$value];
        }

        $fixed_response = self::setup_response($setup_custom_response);
        return ["api_data" => $fixed_response, "api_version" => $api_version];
    }


    public static function setup_response($setup_custom_response)
    {
        $setup_custom_response["metode_pembayaran"] = self::$paymentMethod[$setup_custom_response["metode_pembayaran"]];
        $setup_custom_response["nomor_pembayaran"] =   $setup_custom_response["cvs"];
        $setup_custom_response["instansi_pembayaran"] =  self::$nama_cvs[$setup_custom_response["kode_cvs"]];
        $setup_custom_response["kd_pembayaran_transaksi"] = 166 . substr(rand() * time(), 0, 6);
        $setup_custom_response["nama_pembayaran"] =  request("nama_pembayaran");
        $setup_custom_response["url_notifikasi"] =  request("url_notifikasi");
        $setup_custom_response["app_key"] =  request("app_key");

        return  array_filter($setup_custom_response, 'strlen');
    }
}
