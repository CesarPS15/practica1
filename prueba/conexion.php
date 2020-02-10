<?php

class conexion 
{
	public $conexionDB;
	
	function __construct(){
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="mydb";	

	try{
		$this->conexionDB = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		$this->conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Conexion fallida: ".$e->getMessage();
	}
}

}

?>