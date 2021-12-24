<?php

namespace App\Http\Controllers\API\PaymentMethod;

use App\Http\Controllers\Controller;

class PaymentMethodService extends Controller
{
    private function EloquentData()
    {
        return PaymentMethod::orderBy('created_at', 'DESC');
    }

    private function EloquentDataNonaktif()
    {
        return PaymentMethod::orderBy('created_at', 'DESC');
    }

    public function mendapatkanSeluruhData($request)
    {
        if (@$request->cari) {
            return $this->mencariDataBerdasarkanKostum("nama_ps", $request->cari);
        }
        return $this->EloquentData()->get();
    }

    public function mendapatkanSeluruhDataPaginate($request)
    {
        if (@$request->cari) {
            return $this->mencariDataBerdasarkanKostum("nama_ps", $request->cari);
        }
        return $this->EloquentData()->paginate($this->paginate);
    }

    public function mencariDataBerdasarkanKostum($nama_kolom, $cari)
    {
        return $this->EloquentData()->where($nama_kolom, 'LIKE', '%' . $cari . '%')->paginate($this->paginate);
    }

    public function mendapatkanSatuData($id)
    {
        return PaymentMethod::findOrFail($id);
    }

    public function menyimpanData($request)
    {
        $model = new PaymentMethod();
        $model->kd_payment_method = $this->get_primaryKey("111");
        return $this->mengelolaData($model, $request);
    }

    public function memperbaruiData($request, $id)
    {
        $model = PaymentMethod::findOrFail($id);
        return $this->mengelolaData($model, $request);
    }

    private function mengelolaData($model, $request)
    {
        $model->init_code_pm = $request->init_code_pm;
        $model->nama_pm = $request->nama_pm;
        $model->status_pm = $request->status_pm;
        $model->deskripsi_pm = $request->deskripsi_pm;
        $model->aktor = $request->aktor;
        $model->save();
        return $model;
    }

    public function menghapusData($id)
    {
        $data = PaymentMethod::findOrFail($id)->delete();
        return $data;
    }
}
