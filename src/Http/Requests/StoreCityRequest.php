<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'nullable'],
            'latitude' => ['numeric', 'nullable'],
            'longitude' => ['numeric', 'nullable'],
            'enabled' => ['bool', 'nullable'],
            'city_data' => ['array', 'nullable'],
            'state_id' => ['integer', 'nullable'],
            'country_id' => ['integer', 'nullable'],
        ];
    }
}
