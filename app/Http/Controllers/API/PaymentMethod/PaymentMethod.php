<?php

namespace App\Http\Controllers\API\PaymentMethod;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $table = "payment_method";
    protected $primaryKey = "kd_payment_method";
}
