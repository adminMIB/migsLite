<?php

namespace App\Http\Controllers\API\ClientKey;

use Illuminate\Support\Str;
use Ramsey\Uuid\Rfc4122\UuidV4;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ClientKeyService extends Controller
{

    public function mendapatkanSeluruhDataClientKey()
    {
        return ClientKey::orderBy("created_at", "DESC")->paginate(25);
    }

    public function mencariDataClientkeyByName($request)
    {
        return ClientKey::where("client_key_nama", "LIKE", "%" . $request->cari . "%")->orderBy("created_at", "DESC")->paginate(25);
    }

    public function mendapatkanDetailData($kd_client_key)
    {
        return ClientKey::find($kd_client_key);
    }

    public function menyimpanDataClientKey($request)
    {
        $client_sercret = Str::random(20);
        $data = $request->all();
        $data["kd_client_key"] = $this->get_primaryKey(311);
        $data["client_key_id"] = Str::random(10);
        $data["client_key_secret"] = Hash::make($client_sercret);
        $data["client_key_secret_unhashed"] = $client_sercret;
        ClientKey::create($data);
        return $data;
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
