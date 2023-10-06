<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
            'city_name' => ['string', 'nullable'],
            'city_iso2' => ['string', 'nullable'],
            'city_iso3' => ['string', 'nullable'],
            'city_num_code' => ['string', 'nullable'],
            'city_type' => ['string', 'nullable'],
            'city_status' => ['string', 'nullable'],
            'city_timezones' => ['string', 'nullable'],
            'city_translations' => ['string', 'nullable'],
            'city_data' => ['string', 'nullable'],
            'state_id' => ['integer', 'nullable'],
            'country_id' => ['integer', 'nullable'],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
