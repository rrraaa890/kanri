<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'h_no' => 'nullable|regex:/\A([a-zA-Z0-9])+\z/u',
            'model' => 'nulla|regex:/\A([a-zA-Z0-9])+\z/u',
            'material' => 'required',
            'plate_thickness' => 'required',
            'number_of_sheets' => 'required|regex:/\A([a-zA-Z0-9])+\z/u',
            'supplement' => 'nullable',
        ];
    }
}
