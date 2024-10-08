<?php

namespace App\Http\Requests\Dashboard\Advertisements;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AdvertisementsRequest extends FormRequest
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
                    'name' => 'required|max:255',
                    'image' => ($this->isMethod('post') ? 'required' : 'nullable') . '|mimes:jpeg,png,jpg,gif,svg|max:4096',
                    'description' => 'required|string',
                    'date_time' => 'required',
                ];
    }
}
