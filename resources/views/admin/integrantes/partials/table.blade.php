<table class="table table-hover" >
 			<tr>
 				 <th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>ID</th>
 				 <th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre Completo</th>
 				 <th><font color=#2D4259 size="4" face="Lucida grande"> <center>#Identificación</th>
 				
 								
 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Rol</th>
				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Email</th>	
							 

 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>	Acciones</th>	
								
 								

 							
 			</tr>
 								
 			@foreach ($integrantes as $integrante)
 			<tr>
 					<td><center>{{$integrante->id}}</td>
 					<td><center>{{$integrante->full_name}}</td>
 					<td><center>{{$integrante->numDoc}}</td>
 					<td><center>{{$integrante->rol}}</center></td>
 					<td><center>{{$integrante->email}}</td>
 								 						
 				   <td>
 						@if (Auth::user())				
 						<a href="{{route('integrantes.edit',$integrante)}}"><img src="/images/edit.png" height="50" width="50" alt="Editar"></a>
 						@endif
 						
 				    </td>
 								
 			</tr>

 				
 		@endforeach
 </table>

{!!$integrantes->render()!!}