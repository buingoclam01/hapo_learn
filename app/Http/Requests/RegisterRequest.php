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
            'name' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:7',
            'password_confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required' => __('validation.required'),
            'unique' => __('validation.unique'),
            'max' => __('validation.max'),
            'min' => __('validation.min'),
            'email' => __('validation.email'),
            'same' => __('validation.same'),
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên tài khoản',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_confirm' => 'Nhập lại mật khẩu',
        ];
    }
}
