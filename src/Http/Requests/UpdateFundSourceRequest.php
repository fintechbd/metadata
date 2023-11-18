<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFundSourceRequest extends FormRequest
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
        $uniqueRule = 'unique:'.config('fintech.metadata.fund_source_model', \Fintech\MetaData\Models\FundSource::class).',name';

        return [
            'name' => ['required', 'string', 'min:5', 'max:255', $uniqueRule],
            'code' => ['required', 'string', 'min:5', 'max:255'],
            'country_id' => ['nullable', 'integer'],
            'fund_source_data' => ['nullable', 'array'],
            'enabled' => ['boolean', 'nullable'],
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
