<?php 
	require_once('config/connection.php');

	class Client{
		//Properties

		//Connection with database
		private $connection;

		//Start connection at instantiation
		function __construct(){
			$this->connection = startConnection();
		}

		//New client
		public function store($name, $identificationCard, $tradename, $phone, $direction, $nameLegalRepresentative, $idLegalRepresentative, $emailFE, $passwordFE, $tiv = ""){
			$query = "INSERT INTO clients (nombre, cedula, nombreComercial, telefono, direccion, representanteLegal, cedulaRepresentanteLegal, tiv, correoFE, contrasenaFE) VALUES ('$name', '$identificationCard', '$tradename', '$phone', '$direction', '$nameLegalRepresentative', '$idLegalRepresentative', '$tiv', '$emailFE', '$passwordFE')";
			$store = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Get all client's
		public function get_all(){
			$query = "SELECT clientId, nombre, cedula, tiv, correoFE, contrasenaFE FROM clients";
			$get_all = $this->connection->query($query);
			return $get_all->fetch_all(MYSQLI_ASSOC);
		}

		//Get client
		public function get_by_id($id){
			$query = "SELECT * FROM clients WHERE clientId = '$id'";
			$get_by_id = $this->connection->query($query);
			return $get_by_id->fetch_assoc();
		}

		//Delete client
		public function destroy($id){
			$query = "DELETE FROM clients WHERE clientId = '$id'";
			$destroy = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		public function update($id, $arr){
			$query = "UPDATE clients SET";
			$client = $arr;
			foreach($client as $key => $value){
				
				$query = $query . " " . $key . " = " . "'".$value."',";

			}
			$query = substr($query, 0, -1);
			$query = $query . " WHERE clientId = " . "'".$id."'";
			$update = $this->connection->query($query);
			return $this->connection->affected_rows;
		}
	}
?>