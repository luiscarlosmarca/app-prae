<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proyecto;
use Illuminate\Support\Facades\Session;
class Proyecto extends Model {

	protected $table="proyectos";
	protected $fillable = ['nombre','ciudad','imagen','lugarEjecucion','feEjecucion','id_coordinador','observaciones','justificación'];

	public function scopeNombre($query,$nombre)
	{
	
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombre)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
		
	}

	public function scopeCiudad($query,$ciudad)
	{
		
		if (trim($ciudad) != "")
		{
		$query->where(\DB::raw("CONCAT(ciudad)"),"LIKE","%$ciudad%");
		}
			
		
	}
	

    
	public static function filter($nombre,$ciudad)
	{
			return Proyecto::nombre($nombre)
				
				->ciudad($ciudad)
				->orderBy('nombre','ASC')
				->paginate(3);
	}

	

}
