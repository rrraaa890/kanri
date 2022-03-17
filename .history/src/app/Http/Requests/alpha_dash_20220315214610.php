<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alpha_dash extends FormRequest
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
            
        ];
    }
    
public function passes($attribute, $value)
{
    return preg_match('/^[a-zA-Z0-9]+$/', $value);
}
 
public function message()
{
    return trans('validation.alpha_num_check');
}
