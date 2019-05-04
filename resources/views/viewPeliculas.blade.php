<table border='1'>
	<h1>{{$name}}</h1>
		<tr>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Fecha Inicio</th>
		</tr>
@foreach ($peliculas as $pelicula)
		<tr>
			<td>{{$pelicula->nombre}}</td>
			<td>{{$pelicula->descripcion}}</td>
			<td>{{$pelicula->fecha_inicio}}</td>
		</tr>
@endforeach
			
</table>

<a href="/peliculas/create">Add</a>