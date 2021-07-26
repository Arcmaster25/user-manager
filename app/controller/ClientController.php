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
	}

	if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        $user_class = new ClientController();
        $user_class->$action();
    }
?>