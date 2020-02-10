<!DOCTYPE html>
<html>
<head>
	<meta charset-"utf-8">
	<title>Procesa</title>
	
</head>

<body>
	<h1>Procesado!</h1>
	
	<?php
		//var_dump ($_POST);
		foreach($_POST as $key => $value)
		{
			echo "$key = $value <br>";
		}
		$nombre = $_POST['nombre'];
		
		echo "Mi nombres es $nombre";
	?>
	
</body>	
	
</html>