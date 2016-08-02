<table class="table table-hover" >
 			<tr>
 				 <th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>ID</th>
 				 <th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre </th>
 				 <th><font color=#2D4259 size="4" face="Lucida grande"> <center>#Ciudad</th>
 				
 								
 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Fecha de ejecucion</th>
				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Imagen</th>	
							 

 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>	Acciones</th>	
								
 								

 							
 			</tr>
 								
 			@foreach ($proyectos as $proyecto)
 			<tr>
 					<td><center>{{$proyecto->id}}</td>
 					<td><center>{{$proyecto->nombre}}</td>
 					<td><center>{{$proyecto->ciudad}}</td>
 					<td><center>{{$proyecto->feEjecucion}}</center></td>
 					<td><center><img src="/upload/{{$proyecto->imagen}}" height="180" width="200"></td>
 								 						
 				   <td>
 						@if (Auth::user())				
 						<a href="{{route('proyectos.edit',$proyecto)}}"><img src="/images/edit.png" height="50" width="50" alt="Editar"></a>
 						@endif
 						
 				    </td>
 								
 			</tr>

 				
 		@endforeach
 </table>

{!!$proyectos->render()!!}