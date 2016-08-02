<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class CreateIntegranteRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
            'nombre'       =>'required|string',
            'apellido'     =>'required|string',
            'numDoc'       =>'required|unique:integrantes|integer'
                     
        ];	

	}
}
