<?php 
	function startConnection($host = "localhost", $user = "asemdigital", $password = "Asem2021**", $database = "asemdigital_user_manager"){
		$connection = new mysqli($host, $user, $password, $database);
		if($connection->connect_error){
			echo "Error de conexion " . $connection->connect_error . " codigo de error " . $connection->connect_errno;
		}else{
			return $connection;
		}
	}
?>