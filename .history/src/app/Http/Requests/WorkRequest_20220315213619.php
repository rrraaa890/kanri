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

            'h_no' => 'required|alpha_dash',
            'model' => 'required',
            'material' => 'required|alpha_dash',
            'plate_thickness' => 'required',
            'number_of_sheets' => 'required|alpha_dash',
            'supplement' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'h_no.required' => 'H/Noは必須です',
            'h_no.alpha_dash' => 'H/は半角で記入してください';
            'model.required' => '機種は必須です',
            '.alpha_dash' => 'は半角で記入してください';
            'material.required' => '材質は必須です',
            'plate_thickness.required' => '板厚は必須です',
            'number_of_sheets.required' => '枚数は必須です',
            '.alpha_dash' => 'は半角で記入してください';
    ];
}
}
