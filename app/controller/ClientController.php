<?php 
	class ClientController{
		//Method's

		//Create Client
		public function store(){

			require('app/models/Client.php');
			require('app/models/TaxReturn.php');

			if(isset($_POST['name']) || isset($_POST['identificationCard']) || isset($_POST['identificationCardATV']) || isset($_POST['tradename']) || isset($_POST['regime']) || isset($_POST['phone']) || isset($_POST['direction']) || isset($_POST['legalRepresentative']) || isset($_POST['idLegalRepresentative']) || isset($_POST['emailFE']) || isset($_POST['passwordFE']) || isset($_POST['passwordATV']) || isset($_FILES['tivUrl'])){

				$name = $_POST['name'];

				$identificationCard = $_POST['identificationCard'];

				$identificationCardATV = $_POST['identificationCardATV'];

				$tradename = $_POST['tradename'];

				$regime = $_POST['regime'];

				$phone = $_POST['phone'];

				$direction = $_POST['direction'];

				$legalRepresentative = $_POST['legalRepresentative'];

				$idLegalRepresentative = $_POST['idLegalRepresentative'];

				$emailFE = $_POST['emailFE'];

				$passwordFE = $_POST['passwordFE'];

				$passwordATV = $_POST['passwordATV'];

				$taxReturnType = $_POST['taxReturnType'];

				$taxReturnYear = $_POST['taxReturnYear'];

				$taxReturnMonth = $_POST['taxReturnMonth'];

				$taxReturnTrimonth = $_POST['taxReturnTrimonth'];

				$pdfTaxReturn = $_FILES['pdfTaxReturn'];

				$pdfReceipt = $_FILES['pdfReceipt'];

				$tiv = "";

				if (!empty($_FILES['tivUrl'])) {
						
					if (file_exists("pdfs/")) {
						
						$carpetaDestino = "pdfs/".$_FILES['tivUrl']['name'];

						$archivoGuardado = move_uploaded_file($_FILES['tivUrl']['tmp_name'], $carpetaDestino);

						if ($archivoGuardado == true) {
							
							$tiv = $carpetaDestino;

						}

					}

				}

				$client = new Client();

				$create_client = $client->store($name, $identificationCard, $identificationCardATV, $tradename, $regime, $phone, $direction, $legalRepresentative, $idLegalRepresentative, $emailFE, $passwordFE, $passwordATV, $tiv);

				if ($create_client != -1 && $taxReturnType != "Seleccionar Tipo" && $taxReturnYear != "Seleccionar Año" && !empty($pdfTaxReturn)) {
					
					$client_data = $client->get_by_name($name);

					$client_id = $client_data['clientId'];

					$time = $taxReturnYear;

					$receipt = "";

					$urlTaxReturn = "";

					if ($taxReturnMonth != "Seleccionar Mes") {
						
						$time = $time . " " . $taxReturnMonth;

					}

					if ($taxReturnTrimonth != "Seleccionar Trimestre") {
						
						$time = $time . " " . $taxReturnTrimonth;

					}

					if (!empty($pdfReceipt)) {
						
						if (file_exists("pdfs/")) {
						
							$carpetaDestino = "pdfs/".$pdfReceipt['name'];

							$archivoGuardado = move_uploaded_file($pdfReceipt['tmp_name'], $carpetaDestino);

							if ($archivoGuardado == true) {
							
								$receipt = $carpetaDestino;

							}

						}

					}

					if (file_exists("pdfs/")) {
						
						$carpetaDestino = "pdfs/".$pdfTaxReturn['name'];

						$archivoGuardado = move_uploaded_file($pdfTaxReturn['tmp_name'], $carpetaDestino);

						if ($archivoGuardado == true) {
							
							$urlTaxReturn = $carpetaDestino;

						}

					}

					$taxReturn = new TaxReturn();

					$create_tax_return = $taxReturn->store($client_id, $taxReturnType, $time, $urlTaxReturn, $receipt);

					if($create_tax_return != -1){

						header('Location: index.php?controller=Client&action=index');

					}

				}else{

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

			require('app/models/TaxReturn.php');
			
			$clientData = "";

			$taxReturnData = "";

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$clientId = $_GET['id'];

				$client = new Client();

				$clientSearch = $client->get_by_id($clientId);

				$taxReturn = new TaxReturn();

				$clientTaxReturns = $taxReturn->get_all($clientId);

				if(count($clientSearch) > 0){
					
					$clientData = $clientSearch;

				}

				if (count($clientTaxReturns) > 0) {
					
					$taxReturnData= $clientTaxReturns;

				}
			}

			require('app/views/clients/client.php');
		}

		//Edit basic client data
		public function update(){

			require('app/models/Client.php');

			require('app/models/TaxReturn.php');
			
			$clientData = "";

			$taxReturnData = "";

			$clientId = "";

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$clientId = $_GET['id'];

				$client = new Client();

				$clientSearch = $client->get_by_id($clientId);

				$taxReturn = new TaxReturn();

				$clientTaxReturns = $taxReturn->get_all($clientId);

				if(count($clientSearch) > 0){
					
					$clientData = $clientSearch;
					
				}

				if (count($clientTaxReturns) > 0) {
					
					$taxReturnData= $clientTaxReturns;

				}
			}

			if(isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['cedulaATV']) && isset($_POST['nombreComercial']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['regimen']) && isset($_POST['representanteLegal']) && isset($_POST['cedulaRepresentanteLegal']) && isset($_POST['correoFE']) && isset($_POST['contrasenaFE']) && isset($_POST['contrasenaATV'])){
				
				$arr = array(
					"nombre" => $_POST['nombre'],
					"cedula" => $_POST['cedula'],
					"cedulaATV" => $_POST['cedulaATV'],
					"nombreComercial" => $_POST['nombreComercial'],
					"telefono" => $_POST['telefono'],
					"direccion" => $_POST['direccion'],
					"regimen" => $_POST['regimen'],
					"representanteLegal" => $_POST['representanteLegal'],
					"cedulaRepresentanteLegal" => $_POST['cedulaRepresentanteLegal'],
					"correoFE" => $_POST['correoFE'],
					"contrasenaFE" => $_POST['contrasenaFE'],
					"contrasenaATV" => $_POST['contrasenaATV']
				);

				$client = new Client();

				$update = $client->update($clientId, $arr);

				if($update == 1){
					header('Location: index.php?controller=Client&action=update&id='.$clientId);
				}
			}

			require('app/views/clients/clientEdit.php');
		}

		//Edit tax returns data
		public function addTaxReturn(){

			require("app/models/TaxReturn.php");

			if (isset($_POST['clientId']) && isset($_POST['taxReturnType']) && isset($_POST['taxReturnYear']) && isset($_FILES['pdfDeclaration'])) {

				$clientId = $_POST['clientId'];

				$type = $_POST['taxReturnType'];

				$time = $_POST['taxReturnYear'];

				$taxReturn = $_FILES['pdfDeclaration'];

				$month = $_POST['taxReturnMonth'];

				$trimonth = $_POST['taxReturnTrimonth'];

				$receipt = "";

				if ($month != "Seleccionar Mes") {
					
					$time = $time . " " . $month;

				}

				if ($trimonth != "Seleccionar Trimestre") {
					
					$time = $time . " " . $trimonth;

				}

				if (!empty($_FILES['pdfReceipt'])) {
					
					if (file_exists("pdfs/")) {
						
						$carpetaDestino = "pdfs/".$_FILES['pdfReceipt']['name'];

						$archivoGuardado = move_uploaded_file($_FILES['pdfReceipt']['tmp_name'], $carpetaDestino);

						if ($archivoGuardado == true) {
							
							$receipt = $carpetaDestino;

						}

					}

				}

				if (file_exists("pdfs/")) {
						
					$carpetaDestino = "pdfs/".$taxReturn['name'];

					$archivoGuardado = move_uploaded_file($taxReturn['tmp_name'], $carpetaDestino);

					if ($archivoGuardado == true) {
							
						$taxReturn = $carpetaDestino;

					}

				}

				$taxReturnModel = new TaxReturn();

				$create_tax_return = $taxReturnModel->store($clientId, $type, $time, $taxReturn, $receipt);

				if($create_tax_return != -1){

					header('Location: index.php?controller=Client&action=update&id='.$clientId);

				}

			}

		}

		//Destroy tax return complete
		public function destroyTaxReturn(){

			require("app/models/TaxReturn.php");

			if (isset($_GET['taxId']) && isset($_GET['userId'])) {

				$clientId = $_GET['userId'];

				$taxId = $_GET['taxId'];
				
				$taxReturn = new TaxReturn();

				$destroyTaxReturn = $taxReturn->destroy($taxId);

				if($create_tax_return != -1){

					header('Location: index.php?controller=Client&action=update&id='.$clientId);

				}

			}

		}

		//Destroy receipt
		public function destroyReceipt(){

			require("app/models/TaxReturn.php");

			if (isset($_GET['taxId']) && isset($_GET['userId'])) {

				$clientId = $_GET['userId'];

				$taxId = $_GET['taxId'];
				
				$taxReturn = new TaxReturn();

				$receiptDelete = $taxReturn->destroyReceipt($taxId);

				if ($receiptDelete != -1) {
					
					header('Location: index.php?controller=Client&action=update&id='.$clientId);

				}

			}

		}

		//Add receipt
		public function addReceipt(){

			require("app/models/TaxReturn.php");

			if (isset($_GET['taxId']) && isset($_GET['userId']) && isset($_FILES['receipt'])) {

				$clientId = $_GET['userId'];

				$taxId = $_GET['taxId'];

				$receipt = "";

				if (!empty($_FILES['receipt'])) {
					
					if (file_exists("pdfs/")) {
						
						$carpetaDestino = "pdfs/".$_FILES['receipt']['name'];

						$archivoGuardado = move_uploaded_file($_FILES['receipt']['tmp_name'], $carpetaDestino);

						if ($archivoGuardado == true) {
							
							$receipt = $carpetaDestino;

						}

					}

				}
				
				$taxReturn = new TaxReturn();

				$receiptAdd = $taxReturn->addReceipt($taxId, $receipt);

				if ($receiptAdd != -1) {
					
					header('Location: index.php?controller=Client&action=update&id='.$clientId);

				}

			}

		}

		//Add tiv
		public function addTIV(){

			require("app/models/Client.php");

			if (isset($_GET['userId']) && isset($_FILES['tivUrl'])) {
				
				$clientId = $_GET['userId'];

				$tivUrl = "";

				if (!empty($_FILES['tivUrl'])) {
					
					if (file_exists("pdfs/")) {
						
						$carpetaDestino = "pdfs/".$_FILES['tivUrl']['name'];

						$archivoGuardado = move_uploaded_file($_FILES['tivUrl']['tmp_name'], $carpetaDestino);

						if ($archivoGuardado == true) {
							
							$tivUrl = $carpetaDestino;

						}

					}

				}

				$client = new Client();

				$addTIV = $client->addTIV($clientId, $tivUrl);

				if ($receiptAdd != -1) {
					
					header('Location: index.php?controller=Client&action=update&id='.$clientId);

				}

			}

		}

		//Destroy tiv
		public function destroyTIV(){

			require("app/models/Client.php");

			if (isset($_GET['userId'])) {

				$clientId = $_GET['userId'];
				
				$client = new Client();

				$tivDelete = $client->destroyTIV($clientId);

				if ($tivDelete != -1) {
					
					header('Location: index.php?controller=Client&action=update&id='.$clientId);

				}

			}

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