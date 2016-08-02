<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Integrante;
use Illuminate\Support\Facades\Session;
class Integrante extends Model {

	protected $table="integrantes";
	protected $fillable = ['nombre','apellido','foto','rol','tipoDoc','direccion','telefono','id','email','observaciones','numDoc'];

	public function scopeNombre($query,$nombre)
	{
	
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombre)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
		
	}

	public function scopeid($query,$id)
	{
		
		if (trim($id) != "")
		{
		$query->where(\DB::raw("CONCAT(id)"),"LIKE","%$id%");
		}
			
		
	}
	

    public function getfullnameAttribute()
	{
		return $this->nombre.' 	'.$this->apellido;
	}

	public static function filter($nombre,$id)
	{
			return Integrante::nombre($nombre)
				
				->id($id)
				->orderBy('nombre','ASC')
				->paginate(5);
	}

	

}
