<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Manager</title>
</head>
<body>
	<div class="container mt-5">
		<div class="card text-center">
  			<div class="card-header bg-primary">
    			<h5 class="text-center text-white">Cliente</h5>
  			</div>
  			<div class="card-body">
    			<form class="row">
  					<div class="input-group mb-3">
  						<div class="mb-3 col-12">
    						<label for="" class="form-label fw-bold">Nombre</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData)) { echo $clientData['nombre']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label for="" class="form-labe fw-bold">Cédula</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedula']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label for="" class="form-labe fw-bold">Cédula ATV</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaATV']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Nombre Comercial</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['nombreComercial']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Teléfono</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['telefono']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Dirección</label>
    						<textarea class="form-control-plaintext text-center" readonly>
    							<?php 
    								if(isset($clientData) && !empty($clientData)){ 
    									echo $clientData['direccion']; 
    								}
    							?>
    						</textarea>
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Regimen</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['regimen']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Representante Legal</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['representanteLegal']; } ?>"> 
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Cédula Representante Legal</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaRepresentanteLegal']; } ?>">
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">TIV</label>
    						<input type="text" readonly class="form-control-plaintext text-center" disabled>
  						</div>
  						<div class="mb-3 col-12">
    						<label class="form-label fw-bold" for="">Correo FE</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['correoFE']; } ?>">
  						</div>
  						<div class=" col-12">
    						<label class="form-label fw-bold" for="">Contraseña FE</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaFE']; } ?>">
  						</div>
  						<div class=" col-12">
    						<label class="form-label fw-bold" for="">Contraseña ATV</label>
    						<input type="text" readonly class="form-control-plaintext text-center" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaATV']; } ?>">
  						</div>
  					</div>
  					<hr>
  					<div class="input-group mb-3">
  						<h4 class="text-center">Actividad Económica</h4>
  						<table class="table table-striped table-hover">
  							<thead>
    							<tr>
      								<th scope="col">Nombre</th>
      								<th scope="col">Código</th>
    							</tr>
  							</thead>
  							<tbody>
  								<tr>
  									<td>
  										<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['actividadEconomica']; } ?>
  									</td>
  									<td>
  										<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['codigoActividad']; } ?>
  									</td>
  								</tr>
  							</tbody>
  						</table>
  					</div>
  					<hr>
  					<!--<div class="input-group mb-3">
  						<div class="">
    						<label class="form-label" for="">Tarifa</label>
    						<input type="text" readonly class="form-control-plaintext">
  						</div>
  						<div class="">
    						<label class="form-label" for="">Al Día A</label>
    						<input type="text" readonly class="form-control-plaintext">
  						</div>
  					</div>
  					<hr>-->
  					<div class="input-group mb-3">
  						<h4 class="text-center">Declaraciones Tributarias</h4>
  						<table class="table table-striped table-hover">
  							<thead>
    							<tr>
      								<th scope="col">Tipo</th>
      								<th scope="col">Periodo</th>
      								<th scope="col">Año</th>
    							</tr>
  							</thead>
  							<tbody>
  								<tr>
  									<td>
  										<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['tipoTarifa']; } ?>
  									</td>
  									<td>
  										<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['periodoTarifa']; } ?>
  									</td>
  									<td>
  										<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['anoTarifa']; } ?>
  									</td>
  								</tr>
  							</tbody>
  						</table>
  					</div>
				</form>
  			</div>
		</div>
	</div>
</body>
</html>