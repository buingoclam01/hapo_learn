<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required', 'string', 'min:5', 'unique:users',
            'email' => 'required', 'string', 'email', 'unique:users',
            'password' => 'required', 'string', 'min:7',
            'password_confirmation' => 'required', 'string', 'same:password'
        ];
    }

    public function message()
    {
        return [
            'name.required' => __('message.name_required'),
            'name.min' => __('message.name_min'),
            'name.unique' => __('message.name_unique'),
            'email.required' => __('message.email_required'),
            'email.email' => __('message.email_emai'),
            'email.unique' => __('message.email_unique'),
            'password.required' => __('message.password_required'),
            'password.min' => __('message.password_min'),
            'password_confirmation.required' => __('message.password_confirmation_required'),
            'password_confirmation.same' => __('message.password_confirmation_same'),

        ];
    }
}
