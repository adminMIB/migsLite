<?php

namespace App\Http\Controllers\API\Artajasa\Signal;


class SignalRequestConverter
{
    public static function inquiry($request)
    {
        return [
            "billerId" => "45034",
            "transId" => [
                "RRN" => "129999910133",
                "STAN" => "000133",
                "termId" => "12999991"
            ],
            "transData" => [
                "idCustomer" => "0857222222210",
                "adminFee" => 0,
                "billAmount" => 0,
                "billKey1" => "",
                "billKey2" => ""
            ]
        ];
    }

    public static function payment($request)
    {
        return [
            "billerId" => "45950",
            "paymentType" => "Close",
            "isFundSuspend" => true,
            "transId" => [
                "RRN" => "129999910133",
                "STAN" => "000133",
                "termId" => "12999991",
                "authKey" => "6A1CB5460CDFF065E22D9043FA0035B7",
                "respCode" => "00"
            ],
            "transData" => [
                "idCustomer" => "2001234567899876543210",
                "adminFee" => 0,
                "billAmount" => "1000000.0",
                "billKey1" => "",
                "billKey2" => ""
            ],
            "billInfo" => [
                [
                    "field" => "Customer Name",
                    "ID" => 1,
                    "isArray" => false,
                    "value" => "AHMAD KHAWARIZMI"
                ],
                [
                    "field" => "NIK",
                    "ID" => 2,
                    "isArray" => false,
                    "value" => "3564763123456789"
                ],
                [
                    "field" => "noPol",
                    "ID" => 3,
                    "isArray" => false,
                    "value" => "B1234ZKL"
                ],
                [
                    "field" => "oldTBPKBendDate",
                    "ID" => 4,
                    "isArray" => false,
                    "value" => "20210228"
                ],
                [
                    "field" => "newTBPKBendDate",
                    "ID" => 5,
                    "isArray" => false,
                    "value" => "20210228"
                ],
                [
                    "field" => "STNKendDate",
                    "ID" => 6,
                    "isArray" => false,
                    "value" => "20210228"
                ],
                [
                    "field" => "PKBbillAmount",
                    "ID" => 7,
                    "isArray" => false,
                    "value" => "000000600000"
                ],
                [
                    "field" => "PKBpenaltyAmount",
                    "ID" => 8,
                    "isArray" => false,
                    "value" => "000000100000"
                ],
                [
                    "field" => "SWDKLLJbillAmount",
                    "ID" => 9,
                    "isArray" => false,
                    "value" => "000000200000"
                ],
                [
                    "field" => "SWDKLLJpenaltyAmount",
                    "ID" => 10,
                    "isArray" => false,
                    "value" => "000000000000"
                ],
                [
                    "field" => "PNBPbillAmount",
                    "ID" => 11,
                    "isArray" => false,
                    "value" => "000000040000"
                ],
                [
                    "field" => "PNBPpenaltyAmount",
                    "ID" => 12,
                    "isArray" => false,
                    "value" => "000000020000"
                ],
                [
                    "field" => "parkingbillAmount",
                    "ID" => 13,
                    "isArray" => false,
                    "value" => "000000000000"
                ],
                [
                    "field" => "shippingAmount",
                    "ID" => 14,
                    "isArray" => false,
                    "value" => "000000030000"
                ],
                [
                    "field" => "vehicleBrand",
                    "ID" => 15,
                    "isArray" => false,
                    "value" => "TOYOTA"
                ],
                [
                    "field" => "vehicleType",
                    "ID" => 16,
                    "isArray" => false,
                    "value" => "SIENTA Q"
                ],
                [
                    "field" => "vehicleCategory",
                    "ID" => 17,
                    "isArray" => false,
                    "value" => "MOBIL PENUMPANG"
                ],
                [
                    "field" => "vehicleModel",
                    "ID" => 18,
                    "isArray" => false,
                    "value" => "MPV"
                ],
                [
                    "field" => "vehicleProdYear",
                    "ID" => 19,
                    "isArray" => false,
                    "value" => "2018"
                ],
                [
                    "field" => "vehicleColour",
                    "ID" => 20,
                    "isArray" => false,
                    "value" => "PUTIH"
                ],
                [
                    "field" => "vehicleNumofWheels",
                    "ID" => 21,
                    "isArray" => false,
                    "value" => "4"
                ],
                [
                    "field" => "vehicleEngineCC",
                    "ID" => 22,
                    "isArray" => false,
                    "value" => "01500"
                ],
                [
                    "field" => "vehicleOwnershipOrder",
                    "ID" => 23,
                    "isArray" => false,
                    "value" => "01"
                ],
                [
                    "field" => "vehicleIDNumber",
                    "ID" => 24,
                    "isArray" => false,
                    "value" => "12KLMN1234567YTR22"
                ],
                [
                    "field" => "addInfo1",
                    "ID" => 25,
                    "isArray" => false,
                    "value" => ""
                ],
                [
                    "field" => "addInfo2",
                    "ID" => 26,
                    "isArray" => false,
                    "value" => ""
                ],
                [
                    "field" => "addInfo3",
                    "ID" => 27,
                    "isArray" => false,
                    "value" => ""
                ],
                [
                    "field" => "textSummary",
                    "ID" => 28,
                    "isArray" => false,
                    "value" => "SUKSES"
                ],
                [
                    "field" => "taxBillAmount",
                    "ID" => 29,
                    "isArray" => false,
                    "value" => "000000960000"
                ],
                [
                    "field" => "taxAdminFee",
                    "ID" => 30,
                    "isArray" => false,
                    "value" => "000000010000"
                ]
            ],
            "descUI" => ""
        ];
    }
}
