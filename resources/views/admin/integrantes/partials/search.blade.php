
{!!Form::model(Request::all(),['route'=>'integrantes','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				<div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Integrante:'])!!}
				    {!!Form::text('id',null,['class'=>'form-control','placeholder'=>'ID del Integrante:'])!!}
				  	

 -->
 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
{!!Form::close()!!}