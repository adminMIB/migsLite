<?php

namespace App\Services\PaymentGateaway\Nicepay;

use Illuminate\Support\Facades\Http;


class BaseHttpService
{

    use NicepayDefaultDataTrait;

    private static $_instance = null;
    private static $responseJsonData = null;
    private static $endpoint = null;

    public static function endpoint($endpoint)
    {
        $data = [
            "registration" => "registration"
        ];

        self::$endpoint = self::baseUrl() . $data[$endpoint];
    }

    public static function http()
    {
        self::$_instance =  Http::acceptJson();
        return new self;
    }


    public function registration($data = null)
    {
        self::$_instance =  self::$_instance->post(self::$endpoint, $data);
        return $this;
    }

    public function apply()
    {
        return self::$_instance;
    }
}
