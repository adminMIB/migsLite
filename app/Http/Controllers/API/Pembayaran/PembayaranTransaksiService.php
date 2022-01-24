<?php

namespace App\Http\Controllers\API\Pembayaran;

use Illuminate\Support\Carbon;
use App\Http\Controllers\API\Pembayaran\PembayaranTransaksi;

class PembayaranTransaksiService
{

    private $instance  = null;

    public function sql()
    {
        return PembayaranTransaksi::orderBy("created_at", "DESC");
    }

    public function mendapatkanSeluruhData()
    {
        $this->instance = $this->sql();
        return $this;
    }

    public function mencariData($request)
    {
        $this->instance = $this->sql()->where("invoice_pembayaran", $request);
        return $this;
    }

    public function mendapatkanSeluruhTotalDataHariIni()
    {
        $this->instance = $this->sql()->whereDate('created_at', Carbon::today());
        return $this;
    }

    public function jumlahSeluruhDataPembayaran()
    {
        $this->instance = $this->sql()->count();
        return $this;
    }

    public function jumlahSeluruhUangDataPembayaran()
    {
        $this->instance = $this->sql()->sum("jumlah_dibayarkan");
        return $this;
    }

    public function apply()
    {
        return $this->instance;
    }

    public function mendapatkanSatuData($kd_pembayaran)
    {
        return $this->sql()->wher("kd_pembayaran_transaksi", $kd_pembayaran)->first();
    }
}
