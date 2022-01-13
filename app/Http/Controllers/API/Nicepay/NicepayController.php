<?php

namespace App\Http\Controllers\API\Nicepay;

use Illuminate\Http\Request;
use App\Services\VersioningApiService;
use App\Services\PaymentGateaway\Nicepay\Nicepay;
use App\Services\Response\Nicepay\ConStoreResponse;
use App\Http\Controllers\API\Nicepay\ConvienceStore\ConvienceStore;
use App\Http\Controllers\API\Nicepay\VirtualAccount\VirtualAccount;
use App\Models\PembayaranTransaksi;
use App\Services\Response\Nicepay\VirtualAccResponse;

class NicepayController
{
    use PaymentMethod, ConvienceStore, VirtualAccount;

    public function register(Request $request)
    {
        $response = ConStoreResponse::get(VersioningApiService::version_1_0(), Nicepay::register($request));
        return PembayaranTransaksi::create($response["api_data"]);
    }


    public function convenience_store(Request $request)
    {
        $response = ConStoreResponse::get(VersioningApiService::version_1_0(), Nicepay::register($request));
        return PembayaranTransaksi::create($response["api_data"]);
    }

    public function virtual_account(Request $request)
    {
        $response = VirtualAccResponse::get(VersioningApiService::version_1_0(), Nicepay::register($request));
        return PembayaranTransaksi::create($response["api_data"]);
    }




    public function notifikasiPembayaran(Request $request)
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
        }

        return "Berhasil";
    }
}
