<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InscripcionesForm extends Request
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
            "rut"  =>  "required|numeric",
        ];
    }


    public function messages() {
        return [
            'rut.numeric'  => 'Debes ingresar un rut válido',   
            'rut.required' => 'Debes ingresar un rut',
        ];


    }
}
