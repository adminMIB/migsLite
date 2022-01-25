<?php

namespace App\Http\Controllers\API\Pembayaran;

use App\Http\Controllers\Controller;

class PembayaranTransaksiController extends Controller
{
    use PembayaranFilterTrait;

    private PembayaranTransaksiService $pembayaranTransaksiService;

    public function __construct(PembayaranTransaksiService $pembayaranTransaksiService)
    {
        $this->pembayaranTransaksiService = $pembayaranTransaksiService;
    }

    public function index()
    {
        $in_pembayaran = $this->pembayaranTransaksiService->mendapatkanSeluruhData()->apply()->paginate(10);
        return compact('in_pembayaran');
    }

    public function search(Request $request)
    {
        $in_pembayaran = $this->pembayaranTransaksiService->mencariData($request->cari)->apply()->paginate($this->paginate);
        return compact('in_pembayaran');
    }

    public function show($kd_pembayaran)
    {
        $in_pembayaran = $this->pembayaranTransaksiService->mendapatkanSatuData($kd_pembayaran);
        return compact('in_pembayaran');
    }
}
