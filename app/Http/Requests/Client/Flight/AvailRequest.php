<?php

namespace App\Http\Requests\Client\Flight;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AvailRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'origin' => ['required', 'max:3', 'min:3'],
            'destination' => ['required', 'max:3', 'min:3'],
            'date' => ['required', 'date']
        ];
    }
}
