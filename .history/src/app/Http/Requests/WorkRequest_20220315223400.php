<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Alpha;
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

            'h_no' => 'required|regex:/\A([a-zA-Z0-9])+\z/u',
            'model' => 'required|regex:/\A([a-zA-Z0-9])+\z/u',
            'material' => 'required',
            'plate_thickness' => 'required',
            'number_of_sheets' => 'required|regex:/\A([a-zA-Z0-9])+\z/u',
            'supplement' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'h_no.required' => 'H/Noは必須です',
            'h_no.regex' => '',
            'model.required' => '機種は必須です',
            'model.regex' => '',
            
            'material.required' => '材質は必須です',
            'plate_thickness.required' => '板厚は必須です',
            'number_of_sheets.required' => '枚数は必須です',
            'number_of_sheets.regex' => '枚数は半角もしで記入してください',
            
    ];
}
}
