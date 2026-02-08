<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
             'title' => 'required|min:3|string',
        'price' => 'required|numeric|min:0',
        'desc' => 'required|min:10|string'
        ];
    }


    public function messages(): array
{
    return [
        'title.required' => 'Le titre est obligatoire',
        'title.min' => 'Le titre doit contenir au moins 3 caractères',
        'price.required' => 'Le prix est obligatoire',
        'price.numeric' => 'Le prix doit être un nombre',
        'desc.required' => 'Le desc est obligatoire',
        'desc.min' => 'Le desc doit contenir au moins 3 caractères'
        ];
}
}
