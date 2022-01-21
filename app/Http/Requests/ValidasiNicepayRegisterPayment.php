<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiNicepayRegisterPayment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "url_notifikasi" => "required",
            "nama_kostumer" => "required",
            "phone_kostumer" => "required",
            "email_kostumer" => "required",
            "nama_pembayaran" => "required",
            "metode_pembayaran" => "required",
            "jumlah_pembayaran" => "required",
            "app_key" => "required",
        ];
    }
}
