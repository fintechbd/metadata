<?php

namespace Fintech\MetaData\Http\Requests;

use Fintech\Core\Traits\HasPaginateQuery;
use Illuminate\Foundation\Http\FormRequest;

class IndexCountryRequest extends FormRequest
{
    use HasPaginateQuery;

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
            'search' => ['string', 'nullable', 'max:255'],
            'region_id' => ['integer', 'nullable', 'min:1'],
            'subregion_id' => ['integer', 'nullable', 'min:1'],
            'per_page' => ['integer', 'nullable', 'min:10', 'max:500'],
            'page' => ['integer', 'nullable', 'min:1'],
            'paginate' => ['boolean'],
            'sort' => ['string', 'nullable', 'min:2', 'max:255'],
            'dir' => ['string', 'min:3', 'max:4'],
            'trashed' => ['boolean', 'nullable'],
            'enabled' => ['boolean', 'nullable'],
        ];
    }
}
