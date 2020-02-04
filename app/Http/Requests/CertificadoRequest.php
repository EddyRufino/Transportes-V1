<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificadoRequest extends FormRequest
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
            'num_certificado' => 'required',
            'tipo_inspeccion' => 'required',
            'fecha_inspeccion' => 'required',
            'num_inspeccion' => 'required',
            'resultado' => 'required',
            'vigencia' => 'required',
            'proxima_inspeccion' => 'required',
            'vehiculo_id' => 'required',
        ];
    }
}
