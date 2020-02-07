<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoatsRequest extends FormRequest
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
            'num_poliza' => 'required',
            'uso_vehiculo' => 'required',
            'inicio_poliza' => 'required',
            'fin_poliza' => 'required',
            'inicio_certificado' => 'required',
            'fin_certificado' => 'required',
            'fecha_hoy' => 'required',
            'hora_emision' => 'required',
            'monto_prima' => 'required',
            'descripcion' => '',
            'telefono' => 'required',
            'vehiculo_id' => 'required',
            'dato_id' => 'required',
        ];
    }
}
