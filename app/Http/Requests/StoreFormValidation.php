<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required|max:20',
                'email' => 'required|max:35',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido.',
            'name.max' => 'El nombre no debe sobrepasar los 20 digitos.',
            'email.max' => 'El correo electronico no debe sobrepasar los 35 digitos.',
            'email.required' => 'El correo electronico es requerido.',
        ];
    }
}
