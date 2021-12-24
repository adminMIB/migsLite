<?php

namespace App\Http\Controllers\API\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;

class PaymentMethodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "init_code_pm" => "required",
            "nama_pm" => "required",
            "status_pm" => "required",
            "deskripsi_pm" => "required",
            "aktor" => "required",
        ];
    }

    public function messages()
    {
        # code...
    }
}
