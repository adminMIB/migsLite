<?php

namespace App\Http\Controllers\API\Nicepay;


trait PaymentMethod
{
    public $method = [
        "credit-card" => "01",
        "virtual-account" => "02",
        "convience-store" => "03",
        "click-pay" => "04",
        "e-wallet" => "05",
        "pay-loan" => "06",
        "qris" => "08",
    ];

    public static $paymentMethod = [
        "01" => "Credit Card",
        "02" => "Virtual Account",
        "03" => "CVS (Convenience Store)",
        "04" => "ClickPay",
        "05" => "E-Wallet",
        "06" => "Payloan",
        "08" => "QRIS",
    ];
}
