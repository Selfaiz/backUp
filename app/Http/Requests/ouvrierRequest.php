<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ouvrierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return  [
            'nom' => 'required|min:2|max:100',
            'prenom' => 'required|min:2|max:100',
            'address' => 'required|min:5',
            'ville' => 'required',
            'naissance' => 'required|date',
            'cin' =>  'required',
            'bio' =>  'required',
            'phone' => 'required',
            'sexe' => 'required',
            'email' => 'required|email|unique:ouvriers',
            'password' => 'required|min:8|confirmed',
            'categorie_id' => 'required',
            'experience' => 'required',
            'check' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'check.required' => 'accept dak zmr dyal checkbox b3da'
        ];
    }
}
