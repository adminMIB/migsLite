<?php

namespace App\Http\Controllers\API\ClientKey;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Response\ResponseService;

class ClientKeyController extends Controller
{
    private ClientKeyService $clientKeyService;

    public function __construct(ClientKeyService $clientKeyService)
    {
        $this->clientKeyService = $clientKeyService;
    }

    public function index()
    {
        $in_client_key =  $this->clientKeyService->mendapatkanSeluruhDataClientKey()->apply()->paginate($this->paginate);
        return compact('in_client_key');
    }

    public function search(Request $request)
    {
        $in_client_key =  $this->clientKeyService->mencariDataClientkeyByName($request)->apply()->paginate($this->paginate);
        return compact('in_client_key');
    }


    public function show($kd_client_key)
    {
        $in_client_key =  $this->clientKeyService->mendapatkanDetailData($kd_client_key)->applyWithMap();
        return compact('in_client_key');
    }

    public function store(Request $request)
    {
        $in_client_key =  $this->clientKeyService->menyimpanDataClientKey($request);
        return compact('in_client_key');
    }

    public function update(Request $request, $kd_client_key)
    {
        $in_client_key =  $this->clientKeyService->memperbaruiDataClientKey($request, $kd_client_key);
        return compact('in_client_key');
    }

    public function activate($kd_client_key)
    {
        $this->clientKeyService->aktivasiDataClientKey($kd_client_key);
        return ResponseService::update($kd_client_key);
    }

    public function deactivate($kd_client_key)
    {
        $this->clientKeyService->deaktivasiDataClientKey($kd_client_key);
        return ResponseService::update($kd_client_key);
    }

    public function resetClient($kd_client_key)
    {
        return $this->clientKeyService->melakukanResetPadaClientSecret($kd_client_key);
    }

    public function destory($kd_client_key)
    {
        $this->clientKeyService->menghapusData($kd_client_key);
        return ResponseService::delete($kd_client_key);
    }
}
