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
            'model' => 'nullable|regex:/\A([a-zA-Z0-9])+\z/u',
            'material' => 'nullable',
            'plate_thickness' => 'nullable',
        ];
    }
    
    'h_no.regex' => 'H/Noは半角文字記入してください',
    'model.required' => '機種は必須です',
    'model.regex' => '機種は半角文字記入してください',
}
