<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Manager</title>
</head>
<body>
	<?php require_once('app/shared/addDeclarationModal.php'); ?>
	<div class="container mt-3">
		<div class="card text-center">
  			<div class="card-header bg-dark">
    			<h5 class="text-center text-white">Cliente</h5>
  			</div>
  			<div class="card-body">
    			<form action="index.php?controller=Client&action=update&id=<?php echo $_GET['id'] ?>" id="generalForm" class="row mb-3" method="POST">
  					<div class="input-group mb-3 row">
  						<div class="mb-3 col-6 col-sp-12">
    						<label for="" class="form-label fw-bold">Nombre</label>
    						<input type="text" class="form-control text-center" name="nombre" value="<?php if(isset($clientData) && !empty($clientData)) { echo $clientData['nombre']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label for="" class="form-labe fw-bold">Regimen</label>
    						<input type="text" class="form-control text-center" name="regimen" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['regimen']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label for="" class="form-labe fw-bold">Cédula</label>
    						<input type="text" class="form-control text-center" name="cedula" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedula']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Representante Legal</label>
    						<input type="text" class="form-control text-center" name="representanteLegal" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['representanteLegal']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Nombre Comercial</label>
    						<input type="text" class="form-control text-center" name="nombreComercial" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['nombreComercial']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Cédula ATV</label>
    						<input type="text" class="form-control text-center" name="cedulaATV" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaATV']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Teléfono</label>
    						<input type="tel" class="form-control text-center" name="telefono" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['telefono']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">ContraseñaATV</label>
    						<input type="text" class="form-control text-center" name="contrasenaATV" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaATV']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Direción</label>
    						<input type="text" name="direccion" class="form-control" value="<?php if(isset($clientData) && !empty($clientData)){ echo $clientData['direccion']; }?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">CorreoFE</label>
    						<input type="text" class="form-control text-center" name="correoFE" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['correoFE']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Cédula Representante Legal</label>
    						<input type="text" class="form-control text-center" name="cedulaRepresentanteLegal" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaRepresentanteLegal']; } ?>">
  						</div>
  						<div class=" col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">ContraseñaFE</label>
    						<input type="text" class="form-control text-center" name="contrasenaFE" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaFE']; } ?>">
  						</div>
  						<div class=" col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">TIV</label>
    						<?php if($clientData['tivUrl'] == ""){ ?>
    							<form>
  									<input type="file" class="form-control" name="tivUrl">
  									<button type="submit" class="btn btn-success" formaction="index.php?controller=Client&action=addTIV&userId=<?php echo $clientData['clientId']?>" formenctype="multipart/form-data" formmethod="POST">Subir</button>
  								</form>
    						<?php }else{ ?>
    							<a href="<?php echo $clientData['tivUrl'] ?>" class="d-block btn btn-outline-info text-white">Ver</a>
    							<a href="index.php?controller=Client&action=destroyTIV&userId=<?php echo $clientData['clientId'] ?>" class="d-block btn btn-outline-danger text-white">Borrar</a>
    						<?php } ?>
  						</div>
  					</div>
  					<button type="submit" class="btn btn-success" form="generalForm">Editar Datos</button>
				</form>
				<div class="row text-center">
					<h4>Declaraciones Tributarias</h4>
					<table class="table table-striped table-hover">
  						<thead>
    						<tr>
      							<th scope="col">Tipo</th>
      							<th scope="col">Tiempo</th>
      							<th scope="col">Declaracion Tributaria</th>
      							<th scope="col">Recibo</th>
      							<th scope="col">Borrar</th>
    						</tr>
  						</thead>
  						<tbody id="tableBody">
  							<?php if($taxReturnData == ""){ ?>
  								<div class="alert alert-info text-center m-2" role="alert">
  									Este cliente no tiene declaraciones tributarias creadas
								</div>
  							<?php }else{ ?>
  								<?php foreach($taxReturnData as $taxReturnFile){ ?>
  									<tr>
  										<td>
  											<?php echo $taxReturnFile['tipo'] ?>
  										</td>
  										<td>
  											<?php echo $taxReturnFile['tiempo'] ?>
  										</td>
  										<td>
  											<a href="<?php echo $taxReturnFile['taxReturn'] ?>" class="btn btn-outline-info text-white">Ver</a>
  										</td>
  										<td>
  											<?php if($taxReturnFile['receipt'] == ""){ ?>
  												<form action="index.php?controller=Client&action=addReceipt&taxId=<?php echo $taxReturnFile['taxId']?>&userId=<?php echo $taxReturnFile['clientId']?>" method="POST" enctype="multipart/form-data">
  													<input type="file" class="form-control" name="receipt">
  													<button type="submit" class="btn btn-success">Subir</button>
  												</form>
  											<?php 
  												}else{ 
  											?>
  												<a href="<?php echo $taxReturnFile['receipt'] ?>" class="btn btn-outline-info text-white">Ver</a>
  												<a href="index.php?controller=Client&action=destroyReceipt&taxId=<?php echo $taxReturnFile['taxId']?>&userId=<?php echo $taxReturnFile['clientId']?>" class="btn btn-outline-danger text-white">Eliminar</a>
  											<?php } ?>
  										</td>
  										<td>
  											<a href="index.php?controller=Client&action=destroyTaxReturn&taxId=<?php echo $taxReturnFile['taxId']?>&userId=<?php echo $taxReturnFile['clientId']?>" class="btn btn-outline-danger text-white">Eliminar</a>
  										</td>
  									</tr>
  								<?php } ?>
  							<?php } ?>
  						</tbody>
					</table>
					<button type="button" class="btn btn-success" id="newDeclaration" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Declaracion</button>
				</div>
  			</div>
		</div>
	</div>
	<script src="dist/client_edit/changeFileDeclaration.js"></script>
</body>
</html>