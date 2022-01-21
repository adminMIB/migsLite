<?php

namespace App\Http\Controllers\API\ClientKey;

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
        $in_client_key =  $this->clientKeyService->mendapatkanSeluruhDataClientKey();
        return compact('in_client_key');
    }

    public function search(Request $request)
    {
        $in_client_key =  $this->clientKeyService->mencariDataClientkeyByName($request);
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
}
