<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParaderoRequest extends FormRequest
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
            'nombre' => 'required',
            'num_operacion' => 'required',
            'fecha_expedicion' => 'required',
            'fecha_caducidad' => 'required',
            'presidente' => '',
            'dni_presidente' => 'min:8|max:8',
            'direccion' => '',
            'vicepresidente' => '',
            'dni_vice_presidente' => 'min:8|max:8',
            'secretario' => '',
            'dni_secretario' => 'min:8|max:8',
            'tesorero' => '',
            'dni_tesorero' => 'min:8|max:8',
            'inicio_vigencia' => '',
            'fin_vigencia' => '',
            'avatar' => ''
        ];
    }
}
