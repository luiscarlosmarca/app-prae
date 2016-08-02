
{!!Form::model(Request::all(),['route'=>'proyectos','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				<div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del proyecto:'])!!}
				    {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'Ciudad del proyecto:'])!!}
				  	

 -->
 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
{!!Form::close()!!}