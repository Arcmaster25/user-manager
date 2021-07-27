<?php 
	class ClientController{
		//Method's

		//Create Client
		public function store(){

			require('app/models/Client.php');

			if(isset($_POST['name']) && isset($_POST['identificationCard']) && isset($_POST['tradename']) && isset($_POST['phone']) && isset($_POST['direction']) && isset($_POST['legalRepresentative']) && isset($_POST['idLegalRepresentative']) && isset($_POST['emailFE']) && isset($_POST['passwordFE'])){

				$name = $_POST['name'];

				$identificationCard = $_POST['identificationCard'];

				$tradename = $_POST['tradename'];

				$phone = $_POST['phone'];

				$direction = $_POST['direction'];

				$legalRepresentative = $_POST['legalRepresentative'];

				$idLegalRepresentative = $_POST['idLegalRepresentative'];

				$emailFE = $_POST['emailFE'];

				$passwordFE = $_POST['passwordFE'];

				$tiv = isset($_POST['tiv']) && !empty($_POST['tiv']) ? $_POST['tiv'] : "";

				$client = new Client();

				$create_client = $client->store($name, $identificationCard, $tradename, $phone, $direction, $legalRepresentative, $idLegalRepresentative, $emailFE, $passwordFE, $tiv);

				if($create_client != -1){

					header('Location: index.php?controller=Client&action=index');

				}
			}
			require('app/views/clients/newClient.php');

		}

		//View all client's data
		public function index(){

			require('app/models/Client.php');

			$message = "";

			$clients = "";

			$client = new Client();

			$clientsList = $client->get_all();

			if(count($clientsList) > 0){
				$clients = $clientsList;
			}

			require('app/views/clients/clientList.php');

		}

		//View all one client data
		public function show(){

			require('app/models/Client.php');
			
			$clientData = "";

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$clientId = $_GET['id'];

				$client = new Client();

				$clientSearch = $client->get_by_id($clientId);

				if(count($clientSearch) > 0){
					$clientData = $clientSearch;
				}
			}

			require('app/views/clients/client.php');
		}

		//Edit all one client data
		public function update(){

			require('app/models/Client.php');
			
			$clientData = "";

			$clientId = "";

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$clientId = $_GET['id'];

				$client = new Client();

				$clientSearch = $client->get_by_id($clientId);

				if(count($clientSearch) > 0){
					$clientData = $clientSearch;
				}
			}

			if(isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['nombreComercial']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['representanteLegal']) && isset($_POST['cedulaRepresentanteLegal']) && isset($_POST['correoFE']) && isset($_POST['contrasenaFE'])){
				
				$arr = array(
					"nombre" => $_POST['nombre'],
					"cedula" => $_POST['cedula'],
					"nombreComercial" => $_POST['nombreComercial'],
					"telefono" => $_POST['telefono'],
					"direccion" => $_POST['direccion'],
					"representanteLegal" => $_POST['representanteLegal'],
					"cedulaRepresentanteLegal" => $_POST['cedulaRepresentanteLegal'],
					"correoFE" => $_POST['correoFE'],
					"contrasenaFE" => $_POST['contrasenaFE']
				);

				$client = new Client();

				$update = $client->update($clientId, $arr);

				if($update == 1){
					header('Location: index.php?controller=Client&action=update&id='.$clientId);
				}
			}

			require('app/views/clients/clientEdit.php');
		}

		//Delete user
		public function destroy(){

			require('app/models/Client.php');

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$clientId = $_GET['id'];

				$client = new Client();

				$clientDelete = $client->destroy($clientId);

				if($clientDelete == 1){
					header('Location: index.php?controller=Client&action=index');
				}
			}
		}
	}

	if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        $user_class = new ClientController();
        $user_class->$action();
    }
?>