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
		require_once('app/shared/deleteModal.php');
	?>
	<div class="container mt-3">
		<table class="table table-striped table-hover">
  			<thead>
    			<tr>
      				<th scope="col">Cédula</th>
      				<th scope="col">Cliente</th>
      				<th scope="col">Cédula ATV</th>
      				<th scope="col">Contraseña ATV</th>
      				<th scope="col">TIV</th>
      				<th scope="col">Correo FE</th>
      				<th scope="col">Contraseña FE</th>
      				<th scope="col">Opciones</th>
    			</tr>
  			</thead>
  			<tbody>
    			<?php if($clients == ""){ ?>
    				<div class="alert alert-info text-center m-2" role="alert">
  						Todavia no tienes registrado ningun cliente
					</div>
    			<?php }else{ ?>
    				<?php 
    					foreach ($clients as $clientData) {
    				?>
    					<tr>
    						<td class="text-monospace">
    				    		<?php 
    				    			echo $clientData['cedula'];
    				    		?>
    						</td>
    						<td class="text-monospace">
    				    		<?php 
    				    			echo $clientData['nombre'];
    				    		?>
    						</td>
    						<td class="text-monospace">
    				    		<?php 
    				    			echo $clientData['cedulaATV'];
    				    		?>
    						</td>
    						<td class="text-monospace">
    				    		<?php 
    				    			echo $clientData['contrasenaATV'];
    				    		?>
    						</td>
    						<td class="text-monospace">
    				    		<?php if($clientData['tivUrl'] == ""){ ?>
    				    			<p>No existe TIV</p>
    				    		<?php }else{ ?>
    				    			<a href="<?php echo $clientData['tivUrl'] ?>" class="btn btn-outline-info text-white">Ver</a>
    				    		<?php } ?>
    						</td>
    						<td class="text-monospace">
    				    		<?php 
    				    			echo $clientData['correoFE'];
    				    		?>
    						</td>
    						<td class="text-monospace">
    				    		<?php 
    				    			echo $clientData['contrasenaFE'];
    				    		?>
    						</td>
    						<td>
    				    		<a href="index.php?controller=Client&action=show&id=<?php echo $clientData['clientId']; ?>" class="btn btn-success">Ingresar</a>
    				    		<a href="index.php?controller=Client&action=update&id=<?php echo $clientData['clientId']; ?>" class="btn btn-warning">Editar</a>
    				    		<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" name="<?php echo $clientData['clientId']; ?>">Borrar</button>
    						</td>
    					</tr>
    				<?php 
    					}
    				?>
    			<?php } ?>
  			</tbody>
		</table>
	</div>
</body>
</html>