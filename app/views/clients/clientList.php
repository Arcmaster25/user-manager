<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Manager</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container mt-5">
		<table class="table table-striped table-hover">
  			<thead>
    			<tr>
      				<th scope="col">Cédula</th>
      				<th scope="col">Cliente</th>
      				<th scope="col">TIV</th>
      				<th scope="col">Correo FE</th>
      				<th scope="col">Contraseña FE</th>
      				<th scope="col">Opciones</th>
    			</tr>
  			</thead>
  			<tbody>
    			<?php 
    				foreach ($clients as $clientData) {
    			?>
    			<tr>
    				<td>
    				    <?php 
    				    	echo $clientData['cedula'];
    				    ?>
    				</td>
    				<td>
    				    <?php 
    				    	echo $clientData['nombre'];
    				    ?>
    				</td>
    				<td>
    				    <?php 
    				    	echo $clientData['tiv'];
    				    ?>
    				</td>
    				<td>
    				    <?php 
    				    	echo $clientData['correoFE'];
    				    ?>
    				</td>
    				<td>
    				    <?php 
    				    	 echo $clientData['contrasenaFE'];
    				    ?>
    				</td>
    				<td>
    				    <a href="index.php?controller=Client&action=show&id=<?php echo $clientData['clientId']?>" class="btn btn-success">Ingresar</a>
    				    <button class="btn btn-danger">Borrar</button>
    				</td>
    			</tr>
    			<?php 
    				}
    			?>
  			</tbody>
		</table>
	</div>
</body>
</html>