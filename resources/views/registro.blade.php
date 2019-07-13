@extends('vistaDeMuestra')

@section('titulo')
	registro
@endsection

@section('trabajo')
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="/usuario">
			<table>
				<tr>
					<td>
						<label for="foto">foto</label>
					</td>
					<td>
						<input type="file" name="foto"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nombre">nombre</label>
					</td>
					<td>
						<input type="text" name="nombre"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="apellido">apellido</label>
					</td>
					<td>
						<input type="text" name="apellido"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="telefono">telefono</label>
					</td>
					<td>
						<input type="text" name="telefono"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="email">email</label>
					</td>
					<td>
						<input type="text" name="email"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="clave">clave</label>
				</td>
				<td>
					<input type="text" name="clave"/>
				</td>
				</tr>
				<tr>
					<td>
						<label for="confirme_clave">confirme clave</label>
					</td>
					<td>
						<input type="text" name="confirme_clave"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="departamento">departamento</label>
					</td>
					<td>
						<select name="departamento">
							@foreach($listaDepartamento as $departamento)
								<option value="{{$departamento->id_departamento}}">{{$departamento->nombre_departamento}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<input type="reset" name="borrar">
					</td>
					<td>
						{{csrf_field()}}
						<input type="submit" name="enviar">
					</td>
					<td></td>
				</tr>
			</table>
		</form>	
		@if(count($errors))
			@foreach($errors->all() as $error)
				{{$error}}
			@endforeach

		@endif

	</div>
	
@endsection