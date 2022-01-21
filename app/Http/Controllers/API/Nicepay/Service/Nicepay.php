<?php

namespace App\Http\Controllers\API\Nicepay\Service;

use App\Models\PembayaranTransaksi;
use Illuminate\Support\Facades\Http;


class Nicepay
{
    use NicepayDefaultDataTrait, InitDataToNicepayTrait;

    public static function register($data)
    {
        self::initRequest($data);;
        BaseHttpService::endpoint("registration");
        return  BaseHttpService::http()->registration(self::setDataToNicepayMode(self::$fixedDataNicepay))->apply()->json();
    }

    public static function initRequest($request)
    {
        foreach ($request->all() as $key => $value) {
            if (array_key_exists($key, self::$initializeDataToNicepay)) {
                self::$fixedDataNicepay[self::$initializeDataToNicepay[$key]] = $value;
            }
        }
    }


    public static function validasiNotifikasi($request)
    {
        $jumlah_dibayarkan = $request["amt"];
        $tXid = $request["tXid"];
        $authorisasi_notifikasi = $request["merchantToken"];
        $invoice = $request["referenceNo"];
        $validasi_authorisasi = hash('sha256', Nicepay::$imid . $tXid . $jumlah_dibayarkan . Nicepay::$merchant_key);

        if ($validasi_authorisasi == $authorisasi_notifikasi) {
            PembayaranTransaksi::where("invoice_pembayaran", $invoice)->update([
                "status_pembayaran" => "TERBAYAR",
                "waktu_terbayar" => date("Y-m-d h:i:s"),
            ]);

            $data = PembayaranTransaksi::where("invoice_pembayaran", $invoice)->first();
            $data = Http::acceptJson()->post($data->url_notifikasi, [
                "invoice" => $invoice,
                "key" => $data->app_key,
            ]);
            return response($data, $data->status());
        }

        return response("Authorisasi gagal", 400);
    }
}
