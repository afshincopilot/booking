<?php

namespace App\Http\Requests\Client\Flght;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $passengers = collect($this->get('passengers'));
        $this->replace(array_merge($this->all(), [
            'adl' => $passengers->where('type', '=', 'adl')->count(),
            'inf' => $passengers->where('type', '=', 'inf')->count(),
        ]));
        $passengers = collect($this->get('passengers'))->map(function ($item) {
            $item['typeCheck'] = false;
            if (Carbon::parse($item ['birthday'])->age > 12 && $item['type'] == 'adl')
                $item['typeCheck'] = true;
            if ((Carbon::parse($item ['birthday'])->age < 12 && Carbon::make($item['birthday'])->age > 2) && $item['type'] == 'chd')
                $item['typeCheck'] = true;
            if (Carbon::parse($item ['birthday'])->age < 2 && $item['type'] == 'inf')
                $item['typeCheck'] = true;
            return $item;
        })->toArray();
        $this->replace(array_merge($this->all(), [
            'passengers' => $passengers,
            'passenger_count' => count($passengers),
        ]));
    }

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
            'ticket_id' => ['required', 'exists:tickets,id'],
            "passenger_count" => 'required|numeric|max:9',
            "passengers" => 'required|array',
            "passengers.*.first_name" => 'required|regex:/[a-zA-Z]/',
            "passengers.*.last_name" => 'required|regex:/[a-zA-Z]/',
            "passengers.*.gender" => ['required', 'in:male,female'],
            "passengers.*.nationality" => 'required|min:3|max:3',
            "passengers.*.type" => ['required', 'min:3', 'max:3', 'in:inf,chd,adl'],
            "passengers.*.birthday" => ["required", "date_format:Y-m-d", 'before:' . Carbon::now()],
            'passengers.*.typeCheck' => ['required', function ($attr, $value, $fail) {
                if (!$value)
                    $fail('passenger birthday its not valid');
            }],
            "passengers.*.na_code" => ['required_if:passengers.*.nationality,==,IRN', 'digits:10', 'numeric', 'distinct'],
            "email" => 'email',
            "mobile" => 'digits:10|required',
            "adl" => ['required'],
            "inf" => ['required', 'lte:adl'],
        ];
    }
}
