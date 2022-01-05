<?php

namespace App\Models;

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
    ];
}
