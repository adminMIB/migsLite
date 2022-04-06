<?php

namespace App\Http\Controllers\API\JetExpress\Service;

use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\This;
use PhpParser\Node\Expr\FuncCall;

class BaseHttpJetExpress
{
    use JetExpressDefaultTrait;

    private static $_instance = null;
    private static $responseJsonData = null;
    private static $endpoint = null;

    public static function endpoint($endpoint)
    {
        // endpoint list dev
        // $data = [
        //     "check_tarif" => "jandt_track/inquiry.action",
        //     "order" => "jts-idn-blibli-api/api/order/create",
        //     "cancle_order" => "jts-idn-blibli-api/api/order/cancel",
        //     "tracking" => "jandt-order-ifd-web/track/trackAction!tracking.action"
        // ];

        // endpoint production
        $data = [
            "check_tarif" => "http://jk.jet.co.id:22230/jandt_track/inquiry.action",
            "order" => "https://api.jet.co.id/jts-idn-blibli-api/api/order/create",
            "tracking" => "https://api.jet.co.id/jts-idn-blibli-api/api/order/cancel",
            "cancel_order" => "http://jk.jet.co.id:22232/JandT_ecommerce/api/cancelOrder.action"
        ];

        self::$endpoint = self::base_url() . $data[$endpoint];
    }

    public static function http()
    {
        self::$_instance = Http::asForm();

        return new self;
    }

    public static function httpJson()
    {
        self::$_instance = Http::accept('application/json');

        return new self;
    }

    public function tarif($data = null)
    {
        self::$_instance = self::$_instance->post(self::$endpoint, $data);

        return self::$_instance;
    }

    public function generateAwb($data = null)
    {
        self::$_instance = self::$_instance->post(self::$endpoint, $data);

        return self::$_instance;
    }

    public function cancelOrder($data = null)
    {
        self::$_instance = self::$_instance->post(self::$endpoint, $data);

        return self::$_instance;
    }

    public function tracking($data = null)
    {
        self::$_instance = self::$_instance->post(self::$endpoint, $data);

        return self::$_instance;
    }

    public function apply()
    {
        if (!self::$_instance->successful()) {
            abort(self::$_instance->json(), self::$_instance->status());
        }

        return self::$_instance;
    }
}
