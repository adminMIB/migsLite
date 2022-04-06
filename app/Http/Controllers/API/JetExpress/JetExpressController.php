<?php

namespace App\Http\Controllers\API\JetExpress;

use App\Http\Controllers\API\JetExpress\Service\JetExpress;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidasiKonsumerCheckTarifJetExpress;
use App\Services\Response\ResponseService;
use App\Services\VersioningApiService;
use Illuminate\Http\Request;

class JetExpressController extends Controller
{
    public function get_tarif(ValidasiKonsumerCheckTarifJetExpress $request)
    {
        $get_tarif = JetExpress::tarif_check($request->all());

        return ResponseService::get(VersioningApiService::version_1_0(), $get_tarif->json());
    }

    public function generateAwb(Request $request)
    {
        $generate_awb = JetExpress::generateAwb($request->all());

        return ResponseService::get(VersioningApiService::version_1_0(), $generate_awb->json());
    }

    public function cancleOrder(Request $request)
    {
        $cancle_order = JetExpress::cancelOrder($request->all());

        return ResponseService::get(VersioningApiService::version_1_0(), $cancle_order->json());
    }

    public function getTracking(Request $request)
    {
        $tracking = JetExpress::trackingJnt($request->all());

        return $tracking;
    }
}
