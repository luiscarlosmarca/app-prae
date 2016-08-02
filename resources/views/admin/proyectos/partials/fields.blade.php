<div class="col-sm-6">
						<div class="form-group">
									
									{!!Form::label('Nombre', 'Nombre') !!}
							   		{!!Form::text('nombre',null,['class'=>'form-control floating-label','requiered']) !!}



									

							   		{!!Form::label('observaciones', 'Justificación') !!}
							   		{!!Form::textarea('justificacion',null,['class'=>'form-control floating-label','requiered']) !!}

							   	
							   		
									
						 </div>
						 </div>
						 <div class="col-sm-6">
						 <div class="form-group">
						 			   		
									{!!Form::label('idcoordinador', 'Id del Coordinaor') !!}
							   		{!!Form::text('id_coordinador',null,['class'=>'form-control floating-label','requiered']) !!}
							   		
						 			{!!Form::label('ciudad', 'Ciudad de ejecución') !!}
							   		{!!Form::text('ciudad',null,['class'=>'form-control floating-label','requiered']) !!}

								

							   		{!!Form::label('lugar', 'Lugar de ejecución') !!}
							   		{!!Form::text('lugarEjecucion',null,['class'=>'form-control floating-label','requiered']) !!}


							   		{!!Form::label('feEjecucion', 'Fecha de ejecución') !!}
							   		{!!Form::text('feEjecucion',null,['class'=>'form-control floating-label','requiered']) !!}

							   		{!!Form::label('observaciones', 'Observaciones') !!}
							   		{!!Form::textarea('observaciones',null,['class'=>'form-control floating-label','requiered']) !!}

							   		
						 </div>
						 </div>