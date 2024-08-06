<?php

namespace App\Http\Requests\Api\V1\User;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'phone' => ['required', new Phone, Rule::unique('users', 'phone')->ignore(auth('api')->id())],
            'email' => ['required', 'email:rfc,dns', Rule::unique('users', 'email')->ignore(auth('api')->id())],
            'graduation_document' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:4048'],
            'certificate' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:4048'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب',
            'name.string' => 'الاسم يجب ان يكون نص',
            'phone.required' => 'رقم الهاتف مطلوب',
            'phone.unique' => 'رقم الهاتف مستخدم بالفعل',
            'email.required' => 'البريد الالكتروني مطلوب',
            'email.email' => 'البريد الالكتروني يجب ان يكون بريد الكتروني صالح',
            'graduation_document.required' => 'مطلوب ملف الشهادة',
            // 'graduation_document.mimes' => 'الملف يجب ان يكون من نوع pdf, doc, docx, txt',
            // 'graduation_document.max' => 'الملف يجب ان يكون اقل من 2 ميجا',
            'certificate.required' => 'مطلوب ملف الشهادة',
            // 'certificate.mimes' => 'الملف يجب ان يكون من نوع pdf, doc, docx, txt',
            // 'certificate.max' => 'الملف يجب ان يكون اقل من 2 ميجا',
        ];
    }
}
