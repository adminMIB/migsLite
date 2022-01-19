<?php

namespace App\Http\Controllers\API\Artajasa;

use Illuminate\Support\Facades\Http;


class ArtajasaHttp
{
    private static $key = "Art4ja54";
    private static $_instance = null;
    private static $base_endpoint = "/Artajasa/bersamaPayment/";
    private static $base_url_prod = "http://prod.artajasa.com";
    private static $base_url_dev = "http://dev.artajasa.com";
    private static $service_development = true;
    private static $fixed_url = null;


    public static function http()
    {
        self::$_instance =  Http::acceptJson();
        return new self;
    }

    public function get()
    {
        self::$_instance =  self::$_instance->get(self::$fixed_url);
        return $this;
    }

    public function post($request)
    {
        $mandatory = self::setHeaderMandatory($request);
        self::$_instance =  self::$_instance->withHeaders([
            "signature" => $mandatory["signature"],
            "timestamp" => $mandatory["time"],
            "acquirerid" => self::$key,
        ])->post(self::$fixed_url, $request);
        return $this;
    }

    public function apply()
    {
        return self::$_instance;
    }

    public static function setEndpoint($endpointSelected)
    {
        $data = [
            "inquiry" => "inquiry",
            "payment" => "Payment",
            "status" => "Status",
            "reversal" => "Reversal",
        ];

        if (!array_key_exists($endpointSelected, $data)) {
            abort(400, "endpoint tidak ditemukan , mohon periksa kembali enpoint yang di set");
        }

        $fixed_endpoint = $data[$endpointSelected];
        $base_url = self::$service_development ?  self::$base_url_dev : self::$base_url_prod;
        $base_endpoint = self::$base_endpoint;
        self::$fixed_url =  $base_url . $base_endpoint . $fixed_endpoint;
        return self::$fixed_url;
    }

    public static function setHeaderMandatory($request)
    {
        $dateTime = gmdate("Y-m-d H:i:s");
        $isoDateTime = date(DATE_ISO8601, strtotime($dateTime));
        $isoDateTime = "2020-08-17T19:45:21+07:00";
        $encodeRequest = json_encode($request);
        $payloadAndTimestamp = "$encodeRequest:$isoDateTime";

        $sha256  = hash_hmac('sha256', $payloadAndTimestamp, self::$key, false);
        // $sha256 = hash('sha256', $payloadAndTimestamp . self::$key);
        // $sha256 = hash('sha256', $payloadAndTimestamp);
        return ["signature" => $sha256, "time" => $isoDateTime];
    }
}
