<?php

namespace App\Http\Controllers\API\MasterRequestParameter;

use App\Http\Controllers\Controller;

class MasterRequestParameterService extends Controller
{
    private function EloquentData()
    {
        return MasterRequestParameter::orderBy('created_at', 'DESC');
    }

    private function EloquentDataNonaktif()
    {
        return MasterRequestParameter::orderBy('created_at', 'DESC');
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
        return MasterRequestParameter::findOrFail($id);
    }

    public function menyimpanData($request)
    {
        $model = new MasterRequestParameter();
        $model->kd_payment_service = $this->get_primaryKey("110");
        return $this->mengelolaData($model, $request);
    }

    public function memperbaruiData($request, $id)
    {
        $model = MasterRequestParameter::findOrFail($id);
        return $this->mengelolaData($model, $request);
    }

    private function mengelolaData($model, $request)
    {
        $model->nama_ps = $request->nama_ps;
        $model->dev_base_url_ps = $request->dev_base_url_ps;
        $model->prod_base_url_ps = $request->prod_base_url_ps;
        $model->deskripsi_ps = $request->deskripsi_ps;
        $model->url_dokumentasi = $request->url_dokumentasi;
        $model->status_ps = $request->status_ps;
        $model->aktor = $request->aktor;
        $model->save();
        return $model;
    }

    public function menghapusData($id)
    {
        $data = MasterRequestParameter::findOrFail($id)->delete();
        return $data;
    }
}
