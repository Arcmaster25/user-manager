<?php 
	//Requiries
	require('config/connection.php');

	class User{
		//Properties

		//Connection with database
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
			$lastId = $this->connection->insert_id;
			$queryTwo = "INSERT INTO permits (tipo, userId) VALUES ('visitant', '$lastId')";
			$this->connection->query($queryTwo);
			return $store->affected_rows;
		}

		//Set permissions
		public function set_permissions($userId, $type){
			$query = "UPDATE permits SET tipo = '$type', userId = '$userId'";
			$store = $this->connection->query($query);
			return $store->affected_rows;
		}

		//Get all users
		public function get_all(){
			$query = "SELECT user.nombre, user.contrasena, permits.tipo FROM user INNER JOIN permits WHERE user.id = permits.userId";
			$get_all = $this->connection->query($query);
			return $get_all->fetch_all(MYSQLI_ASSOC);
		}

		//Get user data
		public function get($id){
			$query = "SELECT user.id, user.nombre, user.contrasena, permits.tipo FROM user INNER JOIN permits WHERE user.id = permits.userId AND user.id = '$id'";
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