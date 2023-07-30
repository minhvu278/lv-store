<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'role_id' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|string',
            'password' => 'required|min:8',
            'status' => 'required',
        ];
    }

    public function attributes(): array
    {
        return __('admin/users.info');
    }
}
