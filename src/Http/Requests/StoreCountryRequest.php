<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
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
            'country_name' => ['string', 'nullable'],
            'country_iso2' => ['string', 'nullable'],
            'country_iso3' => ['string', 'nullable'],
            'country_num_code' => ['string', 'nullable'],
            'country_phone_code' => ['string', 'nullable'],
            'country_capital' => ['string', 'nullable'],
            'country_currency' => ['string', 'nullable'],
            'country_region' => ['string', 'nullable'],
            'country_subregion' => ['string', 'nullable'],
            'country_currency_symbol' => ['string', 'nullable'],
            'country_language' => ['string', 'nullable'],
            'country_logo' => ['string', 'nullable'],
            'country_status' => ['string', 'nullable'],
            'country_timezones' => ['string', 'nullable'],
            'country_translations' => ['string', 'nullable'],
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
