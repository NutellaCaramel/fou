<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class nveRequest extends FormRequest
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
            'libelle'=>'required|max:255|unique:nves,libelle',
           
           
            
        ];
    }

    public function messages() : array
    {
        return [
            'libelle.required'=>'le champ est vide',
            'libelle.unique'=>'ce niveau detude existe deja'
          
          
            
        ];
    }
}
