<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
            'iso2' => ['string', 'nullable'],
            'iso3' => ['string', 'nullable'],
            'phone_code' => ['string', 'nullable'],
            'capital' => ['string', 'nullable'],
            'currency' => ['string', 'nullable'],
            'currency_name' => ['string', 'nullable'],
            'currency_symbol' => ['string', 'nullable'],
            'nationality' => ['string', 'nullable'],
            'region_id' => ['integer', 'nullable'],
            'subregion_id' => ['integer', 'nullable'],
            'language' => ['string', 'nullable'],
            'logo' => ['image', 'nullable'],
            'enabled' => ['bool', 'nullable'],
            'emoji' => ['string', 'nullable'],
            'latitude' => ['numeric', 'nullable'],
            'longitude' => ['numeric', 'nullable'],
            'timezones' => ['array', 'nullable'],
            'country_data' => ['array', 'nullable'],
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
