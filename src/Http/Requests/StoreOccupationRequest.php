<?php

namespace Fintech\MetaData\Http\Requests;

use Fintech\MetaData\Models\Occupation;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreOccupationRequest extends FormRequest
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
        $uniqueRule = 'unique:' . config('fintech.metadata.occupation_model', Occupation::class) . ',name';

        return [
            'name' => ['required', 'string', 'min:5', 'max:255', $uniqueRule],
            'code' => ['required', 'string', 'min:5', 'max:255'],
            'country_id' => ['nullable', 'integer'],
            'occupation_data' => ['nullable', 'array'],
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
