<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Tareas</title>
	</head>

	<form action="tareaStore.php" method="POST">

		<label for="tarea">Tarea:</label>
		<input type="text" name="tarea" required>
		<br>
		<label for="tarea">Prioridad:</label>
		<select name="prioridad">
			<option value="1">Baja</option>
			<option value="3">Normal</option>
			<option value="5">Alta</option>
		</select>

		<br>
		<input type="submit" name="Aceptar">
	</form>

	<body>
		<h1>Consultar Tareas</h1>
		<a href="tareaIndex.php">Listado tareas</a>
		<form action="tareasStore.php" method="POST"></form>
	</body>
</html>
