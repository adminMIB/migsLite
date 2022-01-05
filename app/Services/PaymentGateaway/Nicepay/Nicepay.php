<?php

namespace App\Services\PaymentGateaway\Nicepay;


class Nicepay
{
    use NicepayDefaultDataTrait, InitDataToNicepayTrait;

    public static function register($data)
    {
        self::initRequest($data);;
        BaseHttpService::endpoint("registration");
        return  BaseHttpService::http()->registration(self::setDataToNicepayMode(self::$fixedDataNicepay))->apply()->json();
    }

    public static function initRequest($request)
    {
        foreach ($request->all() as $key => $value) {
            self::$fixedDataNicepay[self::$initializeDataToNicepay[$key]] = $value;
        }
    }
}
