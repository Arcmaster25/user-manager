<?php 
	//Requiries
	require('config/connection.php');

	class User{
		//Properties

		//connection with database
		private $connection;

		//Start connection at instantiation
		function __construct(){
			$this->connection = startConnection();
		}

		//Method's

		//New user
		public function store($name, $password){
			$query = "INSERT INTO user (nombre, contrasena) VALUES ('$name', '$password')";
			$store = $this->connection->query($query);
			return $store->affected_rows;
		}

		//Get user data
		public function get($id){
			$query = "SELECT * FROM user WHERE id='$id'";
			$get = $this->connection->query($query);
			return $get->fetch_assoc();
		}

		//Get user by name
		public function get_by_name($name){
            $query = "SELECT * FROM user WHERE nombre ='$name'";
            $get_by_name = $this->connection->query($query);
            return $get_by_name->fetch_assoc();
        }

		//Update name
		public function update_name($id, $name){
			$query = "UPDATE user SET nombre = '$name' WHERE id = '$id'";
			$update_name = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Update password
		public function update_password($id, $password){
			$query = "UPDATE user SET contrasena = '$password' WHERE id = '$id'";
			$update_name = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

	}
?>