<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Manager</title>
</head>
<body>
	<div class="container mt-3">
		<div class="card text-center">
  			<div class="card-header bg-dark">
    			<h5 class="text-center text-white">Cliente</h5>
  			</div>
  			<div class="card-body">
    			<form class="row">
  					<div class="input-group mb-3">
  						<div class="input-group mb-3 row">
  						<div class="mb-3 col-6 col-sp-12">
    						<label for="" class="form-label fw-bold">Nombre</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="name" value="<?php if(isset($clientData) && !empty($clientData)) { echo $clientData['nombre']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label for="" class="form-labe fw-bold">Regimen</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="regime" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['regimen']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label for="" class="form-labe fw-bold">Cédula</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="identificationCard" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedula']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Representante Legal</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="legalRepresentative" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['representanteLegal']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Nombre Comercial</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="tradename" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['nombreComercial']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Cédula ATV</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="identificationCardATV" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaATV']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Teléfono</label>
    						<input type="tel" class="form-control-plaintext text-center" readonly name="phone" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['telefono']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">ContraseñaATV</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="passwordATV" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaATV']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Direción</label>
    						<input type="text" name="direction" class="form-control-plaintext" readonly value="<?php if(isset($clientData) && !empty($clientData)){ echo $clientData['direccion']; }?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">CorreoFE</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="emailFE" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['correoFE']; } ?>">
  						</div>
  						<div class="mb-3 col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">Cédula Representante Legal</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="idLegalRepresentative" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaRepresentanteLegal']; } ?>">
  						</div>
  						<div class=" col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">ContraseñaFE</label>
    						<input type="text" class="form-control-plaintext text-center" readonly name="passwordFE" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaFE']; } ?>">
  						</div>
  						<div class=" col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">TIV</label>
    						<?php if($clientData['tivUrl'] == ""){ ?>
    							<input type="text" class="form-control-plaintext text-center" readonly value="No se a agregado una TIV">
    						<?php }else{ ?>
    							<a href="<?php echo $clientData['tivUrl'] ?>" class="d-block btn btn-outline-info text-white">Ver</a>
    						<?php } ?>
  						</div>
  					</div>
  					<hr>
  					<div class="input-group mb-3 text-center">
  						<h4 class="text-center">Declaraciones Tributarias</h4>
  						<table class="table table-striped table-hover">
  							<thead>
    							<tr>
      								<th scope="col">Tipo</th>
      								<th scope="col">Tiempo</th>
      								<th scope="col">Declaracion Tributaria</th>
      								<th scope="col">Recibo</th>
    							</tr>
  							</thead>
  							<tbody>
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
  													<p class="text-monospace">Esta declaración no tiene resivo</p>
  												<?php }else{ ?>
  													<a href="<?php echo $taxReturnFile['receipt'] ?>" class="btn btn-outline-info text-white">Ver</a>
  												<?php } ?>
  											</td>
  										</tr>
  									<?php } ?>
  								<?php } ?>
  							</tbody>
  						</table>
  					</div>
				</form>
  			</div>
		</div>
	</div>
</body>
</html>