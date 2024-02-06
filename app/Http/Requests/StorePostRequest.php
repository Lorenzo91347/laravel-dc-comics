<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:comics|max:50',
            'description' => 'required|unique:comics',
            'thumb' => 'required|unique:comics',
            'price' => 'required',
            'series' => 'required|min:5',
            'sale_date' => 'required',
            'type' => 'required|min:4',
            'artists' => 'required|min:5',
            'writers' => 'required|min:5',
        ];
    }
    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'title.required' => 'A title is required',
        'description.required' => 'A message is required',
        'thumb.required' => 'This field must have a valid Url',
        'price.required' => 'Price must have a decimal format.e.g. 00.00',
        'series.required' => 'Min.5 letters for this field',
        'sale_date.required' => 'This field must be in American format,e.g. YYYY/MM/DD',
        'type.required' => 'This field must have a valid Url',
        'artists.required' => 'Min.5 letters for this field',
        'writers.required' => 'Min.5 letters for this field',
    ];
}
}
