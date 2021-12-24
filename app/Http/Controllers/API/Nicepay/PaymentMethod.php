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
}
