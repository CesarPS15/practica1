<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>

<body>
	<p>
		<?php
			echo "<h1>Hello mychange my change :)</h1> world";
		?>
    </p>
	
	<p> 
		<?php 
		
			$miVariable = "My Page";
			
			echo "Welcome to $miVariable <br>"; 
			echo 'Welcome to $miVariable <br>'; 
			$x =55;
			$y ="2";
			$z = $x * $y;
			// comentario
			echo "La multiplicación de $x por $y =";
			var_dump($z) ;
			
			 
		?>
	</p>
	
	<p>
		<?php
		$miArray =[ 'Key1' => 'val1', 'Key2' =>'val2', 'Key3' =>'val3'];
		echo"<ol>";
			foreach($miArray as $key => $data)
			{
				echo "<li> $key = $data </li>";
			}
			
		echo"</ol>";
		?>
	</p>

</body>
</html>