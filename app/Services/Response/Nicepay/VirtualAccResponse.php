<?php

namespace App\Services\Response\Nicepay;

use App\Http\Controllers\Controller;

class VirtualAccResponse extends Controller
{
    public static $nama_bank = [
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
        "OTHR" => "etc, unknown",
    ];

    public static $nama_cvs = [
        "ALMA" => "Alfamart",
        "INDO" => "Indomaret",
    ];

    public static $paymentMethod = [
        "01" => "Credit Card",
        "02" => "Virtual Account",
        "03" => "CVS (Convenience Store)",
        "04" => "ClickPay",
        "05" => "E-Wallet",
        "06" => "Payloan",
        "08" => "QRIS",
    ];

    public static $index = [
        "invoice_pembayaran" => "referenceNo",
        "jumlah_dibayarkan" => "amt",
        "tgl_transaksi" => "transDt",
        "waktu_transaksi" => "transTm",
        "metode_pembayaran" => "payMethod",
        "nama_bank" => "bankCd",
        "kode_cvs" => "mitraCd",
        "nama_pembayaran" => "goodsNm",
        "va" => "vacctNo",
        "cvs" => "payNo",
        "tgl_kadaluarsa" => "vacctValidDt",
        "waktu_kadaluarsa" => "vacctValidTm",
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
            if ($api_data[$value] != null) {
                $setup_custom_response[$key] = $api_data[$value];
            }
        }

        $fixed_response = self::setup_response($setup_custom_response);

        return ["api_data" => $fixed_response, "api_version" => $api_version];
    }


    public static function setup_response($setup_custom_response)
    {
        $setup_custom_response["metode_pembayaran"] = self::$paymentMethod[$setup_custom_response["metode_pembayaran"]];
        $setup_custom_response["nomor_pembayaran"] =  $setup_custom_response["va"];
        $setup_custom_response["instansi_pembayaran"] = @self::$nama_bank[$setup_custom_response["nama_bank"]];
        $setup_custom_response["kd_pembayaran_transaksi"] = 166 . substr(rand() * time(), 0, 6);
        $setup_custom_response["nama_pembayaran"] = "Pembayaran Via Nicepay PG";

        unset($setup_custom_response["va"]);
        unset($setup_custom_response["cvs"]);
        unset($setup_custom_response["kode_cvs"]);
        unset($setup_custom_response["nama_bank"]);

        return  array_filter($setup_custom_response, 'strlen');
    }
}
