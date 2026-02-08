<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompteRequest extends FormRequest
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
            'email'=>'required',
            'pw'=>'required|min:6|confirmed',
            'pw_confirmation'=>'required|min:6',
        ];
    }

     public function messages(): array
    {
        return [
            'email.required'=>'email est obligatoir',

            'pw.required'=>'password est obligatoir',
            'pw.min'=>'au moins 6 caractere',

            'pw_confirmation.required'=>' obligatoir',
        ];
    }

}
