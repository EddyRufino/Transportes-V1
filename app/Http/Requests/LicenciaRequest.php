<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenciaRequest extends FormRequest
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
            'num_licencia' => 'required',
            'clase' => 'required',
            'fecha_expedicion' => 'required',
            'fecha_revalidacion' => 'required',
            'restricciones' => 'required',
            'domicilio' => 'required',
            'sangre' => 'required',
            'num_expediente' => '',
            'nacionalidad' => 'required',
            'fecha_nacimiento' => 'required',
            'categoria_id' => 'required',
            'dato_id' => 'required',
        ];
    }
}
