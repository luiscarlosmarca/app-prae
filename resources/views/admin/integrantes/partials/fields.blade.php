
<div class="col-sm-6">
						<div class="form-group">
									
									{!!Form::label('Nombre', 'Nombre') !!}
							   		{!!Form::text('nombre',null,['class'=>'form-control floating-label','requiered']) !!}



									{!!Form::label('Apellido', 'Apellido') !!}
							   		{!!Form::text('apellido',null,['class'=>'form-control floating-label','requiered']) !!}

							   		{!!Form::label('telefono', 'Telefono') !!}
							   		{!!Form::text('telefono',null,['class'=>'form-control floating-label','requiered']) !!}
							   	
							   		{!!Form::label('tipoDoc', 'Tipo de documento') !!}
							   		{!!Form::select('tipoDoc',['Cedula'=>'Cedula de ciudadania','Tarjeta de identidad'=>'Tarjeta de identidad','Registro civil'=>'Registro civil','Pasaporte'=>'Pasaporte'],['class'=>'form-control','requiered']) !!}


									{!!Form::label('numDoc', 'Numero de documento') !!}
							   		{!!Form::text('numDoc',null,['class'=>'form-control floating-label','requiered']) !!}
						 </div>
						 </div>
						 <div class="col-sm-6">
						 <div class="form-group">
						 			
						 			{!!Form::label('rol', 'Rol') !!}
							   		{!!Form::select('rol',['Estudiante'=>'Estudiante','Profesor'=>'Profesor','Tercero'=>'Tercero','Padre de Familia'=>'Padre de Familia'],['class'=>'form-control','requiered']) !!}
							   		<br>

								

							   		{!!Form::label('email', 'Email') !!}
							   		{!!Form::email('email',null,['class'=>'form-control floating-label','requiered']) !!}


							   		{!!Form::label('direccion', 'Dirección') !!}
							   		{!!Form::text('direccion',null,['class'=>'form-control floating-label','requiered']) !!}

							   		{!!Form::label('observaciones', 'Observaciones') !!}
							   		{!!Form::text('observaciones',null,['class'=>'form-control floating-label','requiered']) !!}

							   		{!! Form::label('image','Foto')!!}
									{!! Form::file('foto',null,['class'=>'form-control'])!!}
									Suba una imagen JPG O PNG MAX 2MB	<br>
						 </div>
						 </div>