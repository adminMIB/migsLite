<?php

namespace App\Http\Controllers\API\JetExpress\Service;

use App\Models\Shipment;

class JetExpress
{
    use JetExpressDefaultTrait;

    public static $array_check_tarif = null;

    public static function tarif_check($request)
    {
        BaseHttpJetExpress::endpoint('check_tarif');
        $in_tarif = BaseHttpJetExpress::http()->tarif(self::setChecktarifJetExpress($request));

        return $in_tarif;
    }

    public static function generateAwb($request)
    {
        BaseHttpJetExpress::endpoint('order');
        $in_generate_awb = BaseHttpJetExpress::http()->generateAwb(self::setGenerateAwbJnt($request));
        $response = $in_generate_awb->json();

        Shipment::create([
            "order_id" => $request['order_id'],
            "courier" => "J&T",
            "service" => "EZ",
            "awb" => $response['detail'][0]['awb_no'],
            "estimation" => $response['detail'][0]['etd'],
            "client_id" => $request['client_id'],
        ]);

        return $in_generate_awb;
    }

    public static function cancelOrder($request)
    {
        BaseHttpJetExpress::endpoint('cancel_order');
        $in_cancle_order = BaseHttpJetExpress::http()->cancelOrder(self::setCancelOrderJnt($request));

        return $in_cancle_order;
    }

    public static function trackingJnt($request)
    {
        $url = "http://test-jk.jet.co.id/jandt-order-ifd-web/track/trackAction!tracking.action";
        $client = new \GuzzleHttp\Client();
        $in_tracking = $client->post($url, [
            'auth' => ['TANAYA', '7jB4WGcYhlFq'],
            'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
            'body'    => self::setTrackingJnt($request)
        ]);

        return $in_tracking;
    }
}
