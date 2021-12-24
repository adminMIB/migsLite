<?php

namespace App\Http\Controllers\API\MasterRequestParameter;

use Illuminate\Foundation\Http\FormRequest;

class MasterRequestParameterRequest extends FormRequest
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
            "nama_ps" => "required|max:50",
            "dev_base_url_ps" => "required",
            "prod_base_url_ps" => "required",
            "deskripsi_ps" => "required",
            "url_dokumentasi" => "required",
            "status_ps" => "required",
        ];
    }

    public function messages()
    {
        # code...
    }
}
