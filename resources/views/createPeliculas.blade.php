<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CREAR PELICULAS</h1>
	<form action="/peliculas/store" method="POST">
		{{ csrf_field() }}
		<label for "nombre">Nombre</label>
		<input type="text" name="nombre"><br>
		<label for "descripcion">Descripcion</label>
		<input type="text" name="descripcion"><br>
		<label for "fecha_inicio">Fecha Inicio</label>
		<input type="text" name="fecha_inicio"><br>
		<input type="submit" name="Crear">
	</form>
</body>
</html>