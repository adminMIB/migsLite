<?php

namespace App\Http\Controllers\API\PaymentService;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentService extends Model
{
    use HasFactory;

    protected $table = "payment_service";
    protected $primaryKey = "kd_payment_service";
}
