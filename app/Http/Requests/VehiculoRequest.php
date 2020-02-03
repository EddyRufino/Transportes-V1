<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
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
            'zona_registral' => 'required',
            'oficina_regional' => 'required',
            'placa' => 'required',
            'partida_registral' => 'required',
            'duaidan' => 'required',
            'titulo' => '',
            'fecha_titulo' => 'required',
            'condicion' => 'required',
            'marca' => 'required',
            'color' => 'required',
            'modelo' => 'required',
            'motor' => 'required',
            'combustible' => 'required',
            'form_rodante' => 'required',
            'vim' => 'required',
            'serie' => 'required',
            'anio_fabrica' => 'required',
            'anio_modelo' => 'required',
            'version' => 'required',
            'ejes' => 'required',
            'asientos' => 'required',
            'pasajeros' => 'required',
            'ruedas' => 'required',
            'carroceria' => 'required',
            'potencia' => 'required',
            'cilindros' => 'required',
            'cilindradas' => 'required',
            'p_bruto' => 'required',
            'p_neto' => 'required',
            'carga_util' => 'required',
            'longitud' => 'required',
            'altura' => 'required',
            'ancho' => 'required',
            'categoria_id' => '',
        ];
    }
}
