<?php

namespace App\Services\PaymentGateaway\Nicepay;


trait NicepayDefaultDataTrait
{
    public static $isProduction = true;
    public static $base_url = null;
    public static $fixed_base_url = null;
    public static $referenceNo = null;
    public static $timestamp = null;
    public static $array_default_data = null;

    public static $dev_url = "https://dev.nicepay.co.id/nicepay/direct/";
    public static $prod_url = "https://www.nicepay.co.id/nicepay/direct/";
    public static $version_url = "v2/";
    public static $merchant_key = "33F49GnCMS1mFYlGXisbUDzVf2ATWCl9k3R++d5hDd3Frmuos/XLx8XhXpe+LDYAbpGKZYSwtlyyLOtS/8aD7A==";
    public static $imid = "IONPAYTEST";
    public static $currency = "IDR";
    // public static $dbProcessUrl = "https://ptsv2.com/t/amrullahdev/post";
    public static $dbProcessUrl = "http://9ea8-158-140-185-53.ngrok.io/api/nicepay-notifikasi";


    public static function baseUrl()
    {
        self::$base_url = self::$isProduction ? self::$prod_url :  self::$dev_url;
        return  self::$base_url . self::$version_url;
    }

    public static function getDefaultData()
    {
        self::$referenceNo = "ORD-" . date("ymd") . "-" . rand(100, 999);
        self::$timestamp = date("Ymdhis");
    }

    public static function setDataToNicepayMode($requestToMerger)
    {
        self::getDefaultData();
        $merchantToken = hash('sha256', self::$timestamp . self::$imid . self::$referenceNo . request("jumlah_pembayaran") . self::$merchant_key);
        self::$array_default_data = [
            "referenceNo" => self::$referenceNo,
            "timeStamp" => self::$timestamp,
            "iMid" => self::$imid,
            "currency" => self::$currency,
            "dbProcessUrl" => self::$dbProcessUrl,
            "merchantToken" => "$merchantToken"
        ];

        return array_merge_recursive(
            $requestToMerger,
            self::$array_default_data,
        );
    }
}
