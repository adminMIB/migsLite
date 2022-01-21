<?php

namespace App\Http\Controllers\API\ClientKey;

class ClientKeyService
{

    public function mendapatkanSeluruhDataClientKey()
    {
        return ClientKey::orderBy("created_at", "DESC")->paginate(25);
    }

    public function mencariDataClientkeyByName($request)
    {
        return ClientKey::where("client_key_nama", "LIKE", "%" . $request->cari . "%")->orderBy("created_at", "DESC")->paginate(25);
    }

    public function menyimpanDataClientKey($request)
    {
        return ClientKey::create($request);
    }

    public function memperbaruiDataClientKey($request, $kd_client_key)
    {
        return ClientKey::find($kd_client_key)->update([
            "client_key_nama" => $request->client_key_nama
        ]);
    }

    public function deaktivasiDataClientKey($kd_client_key)
    {
        return ClientKey::find($kd_client_key)->update([
            "client_key_status" => "DEACTIVE"
        ]);
    }

    public function aktivasiDataClientKey($kd_client_key)
    {
        return ClientKey::find($kd_client_key)->update([
            "client_key_status" => "ACTIVE"
        ]);
    }
}
