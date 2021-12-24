<?php

namespace App\Http\Controllers\API\PaymentService;

use Illuminate\Http\Request;
use App\Services\VersioningApiService;
use App\Services\Response\ResponseService;

class PaymentServiceController
{

    private $paymentServiceService;

    public function __construct(PaymentServiceService $paymentServiceService)
    {
        $this->paymentServiceService = $paymentServiceService;
    }

    public function index(Request $request)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->paymentServiceService->mendapatkanSeluruhDataPaginate($request));
    }

    public function show($id)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->paymentServiceService->mendapatkanSatuData($id));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        return ResponseService::store(
            $this->paymentServiceService->menyimpanData($request)
        );
    }
    public function edit($id)
    {
        return ResponseService::get(VersioningApiService::version_1_0(), $this->paymentServiceService->mendapatkanSatuData($id));
    }

    public function update(Request $request, $id)
    {
        return ResponseService::update(
            $this->paymentServiceService->memperbaruiData($request, $id)
        );
    }

    public function destroy($id)
    {
        return ResponseService::delete(
            $this->paymentServiceService->menghapusData($id)
        );
    }
}
