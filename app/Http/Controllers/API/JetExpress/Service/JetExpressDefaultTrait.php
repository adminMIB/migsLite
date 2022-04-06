<?php

namespace App\Http\Controllers\API\JetExpress\Service;

use App\Models\JntIndonesia;
use Illuminate\Support\Facades\Http;

trait JetExpressDefaultTrait
{
    //check tarif key dev
    // public static $key_tarif = '7jB4WGcYhlFq';

    // check tarif key production
    public static $key_tarif = "AYlqwkdXZcmz";

    // generate awb dev key
    // public static $key_order = 'AKe62df84bJ3d8e4b1hea2R45j11klsb';
    // public static $api_key_order = 'CJFS4C';

    // generate awb production key
    public static $key_order = "AKe62df84bJ3d8e4b1hea2R45j11klsb";
    public static $api_key_order = "SV75OM";

    // cancel order dev key
    // public static $key_cancel = "AKe62df84bJ3d8e4b1hea2R45j11klsb";
    // public static $api_key_cancel = "CJFS4C";

    // cancel order production key
    public static $key_cancel = "AKe62df84bJ3d8e4b1hea2R45j11klsb";
    public static $api_key_cancel = "SV75OM";

    // url key dev
    // public static $url = 'https://test-jk.jet.co.id/';

    // url key production
    public static $url = "";

    // initial set data
    public static $array_check_tarif = null;
    public static $array_order = null;
    public static $array_cancel_order = null;
    public static $array_tracking = null;

    public static function base_url()
    {
        return self::$url;
    }

    public static function setChecktarifJetExpress($request) : array
    {
        $alamat_to = JntIndonesia::where('id', $request['id_alamat_penerima'])->first();
        self::$array_check_tarif = [
            "weight" => $request['total_berat_keseluruhan'],
            "sendSiteCode" => "YOGYAKARTA",
            "destAreaCode" => $alamat_to->kecamatan_jnt,
            "cusName" => "TANAYA",
            "productType" => "EZ"
        ];

        $data = json_encode(self::$array_check_tarif);
        $sign = base64_encode(md5(($data) . self::$key_tarif));

        return [
          "data" => $data,
          "sign" => $sign
        ];
    }

    public static function setGenerateAwbJnt($request)
    {
        $alamat_to = JntIndonesia::where('id', $request['id_alamat'])->first();

        self::$array_order = [
            'username' => 'TANAYA',
            'api_key' => self::$api_key_order,
            'orderid' => $request['order_id'],
            'shipper_name' => 'HAMZAH BATIK',
            'shipper_contact' => 'HAMZAH BATIK',
            'shipper_phone' => '+6289777666555',
            'shipper_addr' => 'Bedog, Trihanggo, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55291',
            'origin_code' => 'JOG',
            'receiver_name' => $request['receiver_name'],
            'receiver_phone' => $request['receiver_phone'],
            'receiver_addr' => $request['receiver_addr'],
            'receiver_zip' => $alamat_to->kode_pos,
            'destination_code' => $alamat_to->kode_kota_jnt,
            'receiver_area' => $alamat_to->kode_jnt,
            'qty' => $request['qty'],
            'weight' => $request['weight'],
            'goodsdesc' => $request['goodsdesc'],
            'servicetype' => '1',
            'insurance' => '',
            'orderdate' => $request['orderdate'],
            'item_name '=> $request['item_name'],
            'cod'=> '',
            'sendstarttime' => $request['sendstarttime'],
            'sendendtime' => $request['sendendtime'],
            'expresstype' => '1',
            'goodsvalue' => $request['goodsvalue'],
        ];

        $data_json = json_encode(['detail' => self::$array_order]);

        return [
            "data_param" => $data_json,
            "data_sign" => base64_encode(md5($data_json . self::$key_order))
        ];
    }

    public static function setCancelOrderJnt($request)
    {
        self::$array_cancel_order = [
            'username' => 'TANAYA',
            'api_key' => self::$api_key_cancel,
            'orderid' => $request['order_id'],
            'remark' => "Canceled by E-Commerce",
        ];

        $data_json = json_encode(['detail' => self::$array_cancel_order]);

        return [
            "data_param" => $data_json,
            "data_sign" => base64_encode(md5($data_json . self::$key_cancel))
        ];
    }

    public static function setTrackingJnt($request)
    {
        self::$array_tracking = [
            'awb' => $request['awb'],
            'eccompanyid' => 'TANAYA',
        ];

        $jsonData = json_encode(self::$array_tracking);

        return $jsonData;
    }
}
