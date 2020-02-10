<!DOCTYPE html>

<?php include('tarea.php'); ?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Tareas</title>
	</head>

	<body>
		<h1>Lista de Tareas</h1>

		<a href="tareaCreate.php">Nueva Tarea</a>

		<?php
			$t = new Tarea();
			$consulta = $t->index();
		?>
		<center>
			<table border="5">
				<tr>
					<td>ID</td>
					<td>Tarea</td>
					<td>Prioridad</td>
				</tr>
				<?php
					foreach ($consulta as $conn) {
						echo "<tr>";
						echo "<td>".$conn['ID']."</td>";
						echo "<td>". $conn['Tarea'] ."</td>";
						echo "<td>". $conn['Prioridad'] ."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</center>
	</body>
</html>
