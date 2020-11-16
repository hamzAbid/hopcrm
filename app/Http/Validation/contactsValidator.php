<?php


namespace App\Http\Validation;

class contactsValidator
{
    public function rules()
    {
        return [
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:150', 'min:5']
        ];
    }

    public function messages()
    {
        return [

            'nom.required' => 'Vous devez specifier un nom',
            'prenom.required' => 'Vous devez specifier une prenom',
            'email.email' => 'Vous devez specifier un email valide',
            'email.required' => 'Vous devez specifier un email'
        ];


    }
}
