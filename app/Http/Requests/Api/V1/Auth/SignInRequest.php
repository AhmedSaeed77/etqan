<?php

namespace App\Http\Requests\Api\V1\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'البريد الالكتروني مطلوب',
            'email.email' => 'يجب أن يكون البريد الالكتروني صحيحًا',
            'password.required' => 'كلمه المرور مطلوبه',
            'password.min' => 'كلمه المرور يجب أن تكون على الأقل 6 أحرف',
        ];
    }
}
