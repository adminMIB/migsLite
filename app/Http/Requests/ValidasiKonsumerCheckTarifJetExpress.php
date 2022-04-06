<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiKonsumerCheckTarifJetExpress extends FormRequest
{
    public function autorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // "app_key" => "required",
            "total_berat_keseluruhan" => "required"
        ];
    }
}
