<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminChangePasswordRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'token' => ['required', 'string'],
            'new_password' => 'required|min:8|regex:' . config('regex.password'),
            'password_confirmed' => 'required|same:new_password',
        ];
    }

    public function attributes()
    {
        return [
            'new_password' => __('attribute.new_password'),
            'password_confirmed' => __('attribute.password_confirmed')
        ];
    }

    public function messages()
    {
        return [
            'new_password.min' => __('validation.change_password.invalid'),
            'new_password.regex' => __('validation.change_password.invalid'),
            'password_confirmed.same' => __('validation.change_password.confirm'),
        ];
    }
}
