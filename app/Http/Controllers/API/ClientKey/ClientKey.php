<?php

namespace App\Http\Controllers\API\ClientKey;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientKey extends Model
{
    use HasFactory;

    protected $table = "client_key";
    protected $primaryKey = "kd_client_key";

    protected $fillable = [
        "kd_client_key",
        "client_key_nama",
        "client_key_secret",
        "client_key_status",
    ];


    
}
