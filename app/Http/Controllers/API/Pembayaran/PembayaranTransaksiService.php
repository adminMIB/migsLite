<?php

namespace App\Http\Controllers\API\Pembayaran;

use Illuminate\Support\Carbon;
use App\Http\Controllers\API\Pembayaran\PembayaranTransaksi;

class PembayaranTransaksiService
{

    private $instance  = null;

    public function sql()
    {
        return PembayaranTransaksi::with("mendapatkan_data_client")->orderBy("created_at", "DESC")
            ->when(request("on"), function ($q) {
                $q->where("app_key", request("on"));
            });
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

    public function mendapatkanSeluruhDataPembayaranDiterima()
    {
        $this->instance = $this->sql()->where("status_pembayaran", "TERBAYAR");
        return $this;
    }

    public function mendapatkanSeluruhDataPembayaranPending()
    {
        $this->instance = $this->sql()->where("status_pembayaran", "MENUNGGU");
        return $this;
    }

    public function mendapatkanSatuData($kd_pembayaran)
    {
        $this->instance = $this->sql()->where("kd_pembayaran_transaksi", $kd_pembayaran);
        return $this;
    }

    public function apply()
    {
        return $this->instance;
    }

    public function getWithMap()
    {
        return $this->instance->get()->map(function ($q) {
            return [
                "Aggregator" => $q->aggregator,
                "Kode Pembayaran" => $q->kd_pembayaran_transaksi,
                "Kode Unik Payment Gateaway" => $q->kode_unik_payment_gateaway,
                "Metode Pembayaran" => $q->metode_pembayaran,
                "Instansi Pembayaran" => $q->instansi_pembayaran,
                "Invoice Pembayaran" => $q->invoice_pembayaran,
                "Nomor Pembayaran" => $q->nomor_pembayaran,
                "Jumlah Pembayaran" => "Rp " . number_format($q->jumlah_dibayarkan),
                "Nama Pembayaran" => $q->nama_pembayaran,
                "Kadaluarsa" =>  date("D, d M Y", strtotime($q->waktu_kadaluarsa)),
                "Status Pembayaran" => $q->status_pembayaran,
                "Waktu Pembayaran" => date("D, d M Y", strtotime($q->waktu_terbayar)),
                "URL Notifikasi" => $q->url_notifikasi,
                "App Key" => $q->app_key,
                "Nama Client" => $q->mendapatkan_data_client["client_key_nama"] ?? '-',
            ];
        });
    }
}
