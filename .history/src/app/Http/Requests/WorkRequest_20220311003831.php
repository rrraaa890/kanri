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

            "h_no" => "required",
            "model" => "required",
            "material" => "required",
            "platethickness" => "required",
            "number_of_sheets" =>"required",
            "supplement" => "nullable",
        ];
    }
    public function messages()
    {
        return [

        "h_no.required" => "H/Noは必須です",
        "model.required" => "機種は必須です",
        "material.required" => "材質は必須です",
        "plate-thickness.required" => "板厚は必須です",
        "number-of-sheets.required" =>"枚数は必須です",
        
        
    ];
}
}
