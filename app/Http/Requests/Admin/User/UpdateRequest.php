<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $userId = $this->route('user')->id;
        return [
            'role_id' => 'required',
            'username' => 'required|string',
            'status' => 'required',
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique('users')->ignore($userId),
            ],
        ];
    }

    public function attributes(): array
    {
        return __('admin/users.info');
    }
}
