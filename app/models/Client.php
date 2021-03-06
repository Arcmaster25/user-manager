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
		public function store($name = "", $identificationCard = "", $identificationCardATV = "", $tradename = "", $regime = "", $phone = "", $direction = "", $nameLegalRepresentative = "", $idLegalRepresentative = "", $emailFE = "", $passwordFE = "", $passwordATV = "", $tiv = ""){
			$query = "INSERT INTO clients (nombre, cedula, cedulaATV, nombreComercial, telefono, direccion, regimen, representanteLegal, cedulaRepresentanteLegal, tivUrl, correoFE, contrasenaFE, contrasenaATV) VALUES ('$name', '$identificationCard', '$identificationCardATV', '$tradename', '$phone', '$direction', '$regime', '$nameLegalRepresentative', '$idLegalRepresentative', '$tiv', '$emailFE', '$passwordFE', '$passwordATV')";
			$store = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Get all client's
		public function get_all(){
			$query = "SELECT clientId, nombre, cedula, cedulaATV, tivUrl, correoFE, contrasenaFE, contrasenaATV FROM clients";
			$get_all = $this->connection->query($query);
			return $get_all->fetch_all(MYSQLI_ASSOC);
		}

		//Get by name
		public function get_by_name($name){
			$query = "SELECT * FROM clients WHERE nombre = '$name'";
			$get_by_name = $this->connection->query($query);
			return $get_by_name->fetch_assoc();
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

		//Update client 
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

		//Update client tiv
		public function addTIV($clientId, $tivUrl){
			$query = "UPDATE clients SET tivUrl = '$tivUrl' WHERE clientId = '$clientId'";
			$addTIV = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Delete client tiv
		public function destroyTIV($clientId){
			$query = "UPDATE clients SET tivUrl = '' WHERE clientId = '$clientId'";
			$addTIV = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

	}
?>