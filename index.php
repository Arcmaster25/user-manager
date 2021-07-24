<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Manager</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		session_start();
		require_once('app/shared/navigationBar.php');
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){}else{
	?>
		<div class="alert alert-info text-center m-2" role="alert">
  			Debes loguearte para utilizar la app
		</div>
	<?php 
		}
	?>

	<?php
		require_once('config/const.php');
		$controller = DEFAULT_CONTROLLER;
		if(isset($_GET['controller']) && !empty($_GET['controller'])){
        	$controller = $_GET['controller'];
		}
		$controller = CONTROLLERS_FOLDER . $controller . 'Controller.php';
		if(is_file($controller)){
        	require_once($controller);
		}else{
        	die('El controlador no existe - 404 not found');
		}
	?>
	<script src="dist/bundle.js"></script>
</body>
</html>