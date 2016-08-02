<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProyectoRequest extends Request {

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
		
			'nombre'       =>'required|string',
            'justificacion'=>'required|string',
            'ciudad'       =>'required|string',
            'lugarEjecucion'=>'required|string',
            'id_coordinador'=>'required|exists:integrantes,id'
		];
	}

}
