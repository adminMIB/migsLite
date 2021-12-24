<?php

namespace App\Http\Controllers\API\PaymentMethod;

use Illuminate\Http\Request;
use App\Services\VersioningApiService;
use App\Services\Response\ResponseService;

class PaymentMethodController
{
    private $PaymentMethodService;

    public function __construct(PaymentMethodService $PaymentMethodService)
    {
        $this->PaymentMethodService = $PaymentMethodService;
    }

    public function index(Request $request)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->PaymentMethodService->mendapatkanSeluruhDataPaginate($request));
    }

    public function show($id)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->PaymentMethodService->mendapatkanSatuData($id));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        return ResponseService::store(
            $this->PaymentMethodService->menyimpanData($request)
        );
    }
    public function edit($id)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->PaymentMethodService->mendapatkanSatuData($id));
    }

    public function update(Request $request, $id)
    {
        return ResponseService::update(
            $this->PaymentMethodService->memperbaruiData($request, $id)
        );
    }

    public function destroy($id)
    {
        return ResponseService::delete(
            $this->PaymentMethodService->menghapusData($id)
        );
    }
}
