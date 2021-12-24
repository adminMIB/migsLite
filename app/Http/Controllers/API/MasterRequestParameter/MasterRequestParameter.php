<?php

namespace App\Http\Controllers\API\MasterRequestParameter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterRequestParameter extends Model
{
    use HasFactory;

    protected $table = "master_request_parameters";
    protected $primaryKey = "kd_payment_service";
}
