<?php 
	require_once('config/connection.php');

	class TaxReturn{
		//Properties

		//Connection with database
		private $connection;

		//Start connection at instantiation
		function __construct(){
			$this->connection = startConnection();
		}

		//New Tax Return
		public function store($clientId, $type, $time, $taxReturn, $receipt = ""){
			$query = "INSERT INTO taxreturns (tipo, tiempo, taxReturn, receipt, clientId) VALUES ('$type', '$time', '$taxReturn', '$receipt', '$clientId')";
			$store = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Get all client tax return
		public function get_all($clientId){
			$query = "SELECT * FROM taxreturns WHERE clientId = '$clientId'";
			$get_all = $this->connection->query($query);
			return $get_all->fetch_all(MYSQLI_ASSOC);
		}

		//Delete recipt
		public function destroyReceipt($taxId){
			$query = "UPDATE taxreturns SET receipt = '' WHERE taxId = '$taxId'";
			$destroyReceipt = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Add receipt
		public function addReceipt($taxId, $receipt){
			$query = "UPDATE taxreturns SET receipt = '$receipt' WHERE taxId = '$taxId'";
			$destroyReceipt = $this->connection->query($query);
			return $this->connection->affected_rows;
		}

		//Delete tax return 
		public function destroy($taxId){
			$query = "DELETE FROM taxreturns WHERE taxId = '$taxId'";
			$destroy = $this->connection->query($query);
			return $this->connection->affected_rows;
		}
	}
?>