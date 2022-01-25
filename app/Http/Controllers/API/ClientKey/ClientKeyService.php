<?php

namespace App\Http\Controllers\API\ClientKey;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ClientKeyService extends Controller
{

    private $instance = null;

    public function sql()
    {
        return ClientKey::orderBy("created_at", "DESC");
    }


    public function mendapatkanSeluruhDataClientKey()
    {
        $this->instance = $this->sql();
        return $this;
    }

    public function mencariDataClientkeyByName($request)
    {
        $this->instance = $this->sql()->where("client_key_nama", "LIKE", "%" . $request . "%");
        return $this;
    }

    public function mendapatkanDetailData($kd_client_key)
    {
        $this->instance = $this->sql()->where("kd_client_key", $kd_client_key);
        return $this;
    }

    public function apply()
    {
        return $this->instance;
    }

    public function applyWithMap()
    {
        return $this->instance->get()
            ->map(function ($q) {
                return [
                    "Nama Client" => $q->client_key_nama,
                    "Client ID" => $q->client_key_id,
                    "Client Status" => $q->client_key_status,
                    "Dibuat" => $q->created_at->format("D,d M Y") ?? '-',
                ];
            });
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
