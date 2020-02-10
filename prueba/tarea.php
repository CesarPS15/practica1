<?php
	include('conexion.php');
	class Tarea extends conexion
	{
		function __construct(){
			parent:: __construct();
		}
		public function store($tarea,$prioridad){
			$sql = "INSERT INTO mydbp(tarea,prioridad) 
			VALUES('$tarea', '$prioridad')";
			$this->conexionDB->exec($sql);
		}

		public function index(){
			$stmt = $this->conexionDB->prepare("SELECT * FROM mydbp");
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			return $stmt->fetchAll();
		}

	}
?>