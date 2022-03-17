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
            'material' => 'required',
            'plate_thickness' => 'required',
            'number_of_sheets' => 'required|regex:/\A([a-zA-Z0-9])+\z/u',
            'supplement' => 'nullable',
            // regex:/\A([a-zA-Z0-9])+\z/uは半角文字をバリデーションするための正規表現です
        ];
    }
    public function messages()
    {
        return [
            'h_no.required' => 'H/Noは必須です',
            'h_no.regex' => 'H/Noは半角文字記入してください',
            'model.required' => '機種は必須です',
            'model.regex' => '機種は半角文字記入してください',
            'material.required' => '材質は必須です',
            'plate_thickness.required' => '板厚は必須です',
            'number_of_sheets.required' => '枚数は必須です',
            'number_of_sheets.regex' => '枚数は半角文字で記入してください',
            
        ];
    }
}
