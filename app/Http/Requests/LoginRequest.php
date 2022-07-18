<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => ['required', ],
            'password' => ['required', 'max:6', ],
        ];
    }

    public function messages()
    {
    return [
        'required' => __('validation.required'),
        'max' => __('validation.max'),
    ];

    }
}
