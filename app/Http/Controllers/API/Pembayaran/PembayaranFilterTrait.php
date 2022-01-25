<?php

namespace App\Http\Controllers\API\Pembayaran;

use Illuminate\Http\Request;

trait PembayaranFilterTrait
{
    private PembayaranTransaksiService $pembayaranTransaksiService;

    public function hariIni()
    {
        $in_pembayaran_total_hari_ini = $this->pembayaranTransaksiService->mendapatkanSeluruhTotalDataHariIni()->apply()->count();
        $in_pembayaran_jumlah_hari_ini = $this->pembayaranTransaksiService->mendapatkanSeluruhTotalDataHariIni()->apply()->sum("jumlah_dibayarkan");
        return compact('in_pembayaran_total_hari_ini', "in_pembayaran_jumlah_hari_ini");
    }


    public function seluruhDataDiterima()
    {
        $in_pembayaran_total_diterima = $this->pembayaranTransaksiService->mendapatkanSeluruhDataPembayaranDiterima()->apply()->count();
        $in_pembayaran_jumlah_diterima = $this->pembayaranTransaksiService->mendapatkanSeluruhDataPembayaranDiterima()->apply()->sum("jumlah_dibayarkan");
        return compact('in_pembayaran_total_diterima', "in_pembayaran_jumlah_diterima");
    }

    public function seluruhDataPending()
    {
        $in_pembayaran_total_pending = $this->pembayaranTransaksiService->mendapatkanSeluruhDataPembayaranPending()->apply()->count();
        $in_pembayaran_jumlah_pending = $this->pembayaranTransaksiService->mendapatkanSeluruhDataPembayaranPending()->apply()->sum("jumlah_dibayarkan");
        return compact('in_pembayaran_total_pending', "in_pembayaran_jumlah_pending");
    }

    public function pembayaranAkhir(Request $request)
    {
        $this->validate($request, [
            "on" => "required"
        ]);
        $in_pembayran_terakhir = $this->pembayaranTransaksiService->mendapatkanSeluruhData()->getWithMap()->first();
        return compact('in_pembayran_terakhir');
    }
}
