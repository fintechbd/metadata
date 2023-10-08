<?php

namespace Fintech\MetaData\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOccupationRequest extends FormRequest
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
        $uniqueRule = 'unique:'.config('fintech.metadata.occupation_model', \Fintech\MetaData\Models\Occupation::class).',name';

        return [
            'name' => ['required', 'string', 'min:5', 'max:255', $uniqueRule],
            'code' => ['required', 'string', 'min:5', 'max:255'],
            'country_id' => ['nullable', 'integer'],
            'occupation_data' => ['nullable', 'array']
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
