<?php

namespace App\Http\Controllers\API\Nicepay\Service;


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
    public static $merchant_key = "vYMsKr7XsXdkePynvQRD+3tfsNkH/ZwN35HeCwQMPyDeGYb+iDVUd2AU9ztQu6rpTtsAhCM0BONkM8LHbdN0YQ==";
    public static $imid = "HAMZAHBTK1";
    public static $currency = "IDR";

    // public static $dbProcessUrl_dev = "https://ptsv2.com/t/alibelucky/post";
    public static $dbProcessUrl_prod = "http://migs.hamzahbatik.co.id/api/nicepay/notifikasi";

    public static $dbProcessUrl_dev = "https://69e2-158-140-185-53.ngrok.io/api/nicepay/notifikasi";
    // public static $dbProcessUrl_prod = "https://migs.amrdev.my.id/api/nicepay/notifikasi";


    public static function baseUrl()
    {
        // self::$base_url = self::$isProduction ? self::$prod_url :  self::$dev_url;
        return  self::$prod_url . self::$version_url; 
    }

    public static function getDefaultData()
    {
        self::$referenceNo = "ORD-" . date("ymd") . "-" . rand(100, 999);
        self::$timestamp = date("Ymdhis");
    }

    public static function setDataToNicepayMode($requestToMerger)
    {
        $dbProcessUrl = env("NICE_PAY_DEV") ? self::$dbProcessUrl_dev :  self::$dbProcessUrl_prod;
        self::getDefaultData();
        $merchantToken = hash('sha256', self::$timestamp . self::$imid . self::$referenceNo . request("jumlah_pembayaran") . self::$merchant_key);
        self::$array_default_data = [
            "referenceNo" => self::$referenceNo,
            "timeStamp" => self::$timestamp,
            "iMid" => self::$imid,
            "currency" => self::$currency,
            "dbProcessUrl" => self::$dbProcessUrl_prod,
            "merchantToken" => "$merchantToken"
        ];

        return array_merge_recursive(
            $requestToMerger,
            self::$array_default_data,
        );
    }
}
