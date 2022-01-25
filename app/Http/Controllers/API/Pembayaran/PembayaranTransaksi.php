<?php

namespace App\Http\Controllers\API\Pembayaran;

use App\Http\Controllers\API\ClientKey\ClientKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranTransaksi extends Model
{
    use HasFactory;

    protected $table = "pembayaran_transaksi";
    protected $primaryKey = "kd_pembayaran_transaksi";
    protected $fillable = [
        "kd_pembayaran_transaksi",
        "kode_unik_payment_gateaway",
        "metode_pembayaran",
        "instansi_pembayaran",
        "invoice_pembayaran",
        "nomor_pembayaran",
        "jumlah_dibayarkan",
        "nama_pembayaran",
        "waktu_kadaluarsa",
        "waktu_terbayar",
        "url_notifikasi",
        "app_key",
    ];


    public function mendapatkan_data_client()
    {
        return $this->hasOne(ClientKey::class, "client_key_id", "app_key")->select(["client_key_nama", "client_key_id"]);
    }
}
