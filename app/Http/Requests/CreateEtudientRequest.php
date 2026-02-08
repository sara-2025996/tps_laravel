<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEtudientRequest extends FormRequest
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
            'nom' => 'required|min:3|string',
            'prenom' => 'required|min:3|string',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'type' => 'required',
            'filier' => 'required'
        ];
    }

     public function messages(): array
{
    return [
        'nom.required' => 'Le nom est obligatoire',
        'nom.min' => 'Le nom doit contenir au moins 3 caractères',

        'prenom.required' => 'Le prenom est obligatoire',
        'prenom.min' => 'Le prenom doit contenir au moins 3 caractères',
        
        'email.required' => 'Le email est obligatoire',

        'password.required' => 'Le password est obligatoire ',
        'password_confirmation.required' => ' obligatoire ',

        'type.required' => 'Le type est obligatoire',
        'filier.required' => 'Le filier est obligatoire'
        ];
}
}
