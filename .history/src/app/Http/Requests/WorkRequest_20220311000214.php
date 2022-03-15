<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            "model" => "required",
            "material" => "required",
            "plate-thickness" => "required",
            "number-of-sheets" =>"required",
            "supplement" => "nullable",
        ];
    }
    public function messages()
    {
        return [
        "model" => "required",
        "material" => "required",
        "plate-thicknessrequired" => "required",
        "number-of-sheets.required" =>"",
        
        
    ];
}
}
