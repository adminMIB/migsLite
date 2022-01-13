<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PembayaranTransaksi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return PembayaranTransaksi::get();
    }

    public function show($id)
    {
        return PembayaranTransaksi::findOrFail($id);
    }
}
