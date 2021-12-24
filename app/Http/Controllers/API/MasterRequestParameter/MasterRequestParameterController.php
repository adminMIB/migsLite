<?php

namespace App\Http\Controllers\API\MasterRequestParameter;

use Illuminate\Http\Request;
use App\Services\VersioningApiService;
use App\Services\Response\ResponseService;

class MasterRequestParameterController
{

    private $MasterRequestParameterService;

    public function __construct(MasterRequestParameterService $MasterRequestParameterService)
    {
        $this->MasterRequestParameterService = $MasterRequestParameterService;
    }

    public function index(Request $request)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->MasterRequestParameterService->mendapatkanSeluruhDataPaginate($request));
    }

    public function show($id)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->MasterRequestParameterService->mendapatkanSatuData($id));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        return ResponseService::store(
            $this->MasterRequestParameterService->menyimpanData($request)
        );
    }
    public function edit($id)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->MasterRequestParameterService->mendapatkanSatuData($id));
    }

    public function update(Request $request, $id)
    {
        return ResponseService::update(
            $this->MasterRequestParameterService->memperbaruiData($request, $id)
        );
    }

    public function destroy($id)
    {
        return ResponseService::delete(
            $this->MasterRequestParameterService->menghapusData($id)
        );
    }
}
