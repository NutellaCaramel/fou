<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class apprenantModifierRequest extends FormRequest
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
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'adresse'=>'required|max:255',
            'telephone'=>'required|max:14'
            
        ];
    }

    public function messages() : array
    {
        return [
            'nom.required'=>'le champ est vide',
            'prenom.required'=>'le champ est vide',
            'adresse.required'=>'le champ est vide',
            'telephone.required'=>'le champ est vide'
            
        ];
    }
}
