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
         * alpah
         *
         * @param string $attribute
         * @param string $value
         * @return true
         */
        public function validateAlpha($attribute, $value)
        {
            return (preg_match("/^[a-z]+$/i", $value));
        }
    
        /**
         * alpah_dash
         *
         * @param string $attribute
         * @param string $value
         * @return true
         */
        public function validateAlphaDash($attribute, $value)
        {
            return (preg_match("/^[a-z0-9_-]+$/i", $value));
        }
    
        /**
         * alpah_num
         *
         * @param string $attribute
         * @param string $value
         * @return true
         */
        public function validateAlphaNum($attribute, $value)
        {
            return (preg_match("/^[a-z0-9]+$/i", $value));
        }
    }
}