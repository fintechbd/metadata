<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStateRequest extends FormRequest
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
            'state_name' => ['string', 'nullable'],
            'state_iso2' => ['string', 'nullable'],
            'state_iso3' => ['string', 'nullable'],
            'state_num_code' => ['string', 'nullable'],
            'state_type' => ['string', 'nullable'],
            'state_status' => ['string', 'nullable'],
            'state_timezones' => ['string', 'nullable'],
            'state_translations' => ['string', 'nullable'],
            'state_data' => ['string', 'nullable'],
            'country_id' => ['string', 'nullable'],
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
