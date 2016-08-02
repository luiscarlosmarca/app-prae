<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateIntegranteRequest; 
use App\Http\Requests\EditIntegranteRequest;
use App\Http\Requests\CreateProyectoRequest; 
use App\Http\Requests\EditProyectoRequest; 
use Illuminate\Http\Request;
use App\Integrante;
use App\Proyecto;
use \Input as Input;
use Illuminate\Support\Facades\Session;
class CrudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show_integrantes(Request $request)
    {
        
        $integrantes= Integrante::filter($request->get('nombre'),$request->get('id'));

         return view ('admin.integrantes.index', compact('integrantes'));
	}

	//Integrantes
	public function create_integrantes()
	{
		return view('admin.integrantes.create');
	}
	
	public function store_integrantes(CreateIntegranteRequest $request)
	{
		
        if(Input::hasFile('foto'))
        {

            $file = Input::file('foto');
            $file->move('upload',$file->getClientOriginalName());
            $image='img src="/upload/integrantes'.$file->getClientOriginalName().'"';
                
            $integrantes = new Integrante($request->all());
            $integrantes->foto=$file->getClientOriginalName();
          
            $integrantes->save();
       
      
            Session::flash('message',$integrantes->full_name.' Fue creado');
            
             return redirect()->route('integrantes');
        }
      
        $integrantes=Integrante::create($request->all());
        Session::flash('message',$integrantes->full_name.' Fue creado');
        return redirect()->route('integrantes');
	}

	public function edit_integrantes($id)

	{
		$integrante=Integrante::findOrFail($id);
		return view("admin.integrantes.edit",compact('integrante'));
	}

	public function update_integrantes(EditIntegranteRequest $request,$id)
    {

        $integrante=Integrante::findOrFail($id);
        $integrante->fill($request->all());
        $integrante->save();

        Session::flash('message',$integrante->full_name.' Se actualizo los datos');
        return redirect()->route('integrantes');
   
	}

// Proyectos

	public function show_proyectos(Request $request)
    {
        
        $proyectos= Proyecto::filter($request->get('nombre'),$request->get('ciudad'));

        return view ('admin.proyectos.index', compact('proyectos'));
	}

	public function create_proyectos()
	{
		return view('admin.proyectos.create');
	}

	
	public function store_proyectos(CreateProyectoRequest $request)
	{
		
        if(Input::hasFile('imagen'))
        {

            $file = Input::file('imagen');
            $file->move('upload',$file->getClientOriginalName());
            $image='img src="/upload/proyectos'.$file->getClientOriginalName().'"';
                
            $proyectos = new Proyecto($request->all());
            $proyectos->imagen=$file->getClientOriginalName();
          
            $proyectos->save();
       
      
            Session::flash('message',$proyectos->nombre.' Fue creado');
            
            return redirect()->route('proyectos');
        }
      
        $proyectos=Proyecto::create($request->all());
        Session::flash('message',$proyectos->nombre.' Fue creado');
         return redirect()->route('proyectos');
	}

	public function edit_proyectos($id)
	{
		$proyecto=Proyecto::findOrFail($id);
		return view("admin.proyectos.edit",compact('proyecto'));
	}

	public function update_proyectos(EditProyectoRequest $request,$id)
    {

        $proyecto=Proyecto::findOrFail($id);
        $proyecto->fill($request->all());
        $proyecto->save();

        Session::flash('message',$proyecto->nombre.' Se actualizo los datos');
        return redirect()->route('proyectos');
   
	}
}
