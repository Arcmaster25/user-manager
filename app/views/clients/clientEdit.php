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
  			<div class="card-header bg-primary">
    			<h5 class="text-center text-white">Cliente</h5>
  			</div>
  			<div class="card-body">
    			<form action="index.php?controller=Client&action=update&id=<?php echo $_GET['id'] ?>" class="row" method="POST">
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
    						<input type="number" class="form-control text-center" name="cedula" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedula']; } ?>">
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
    						<input type="number" class="form-control text-center" name="cedulaATV" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaATV']; } ?>">
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
    						<input type="number" class="form-control text-center" name="cedulaRepresentanteLegal" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['cedulaRepresentanteLegal']; } ?>">
  						</div>
  						<div class=" col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">ContraseñaFE</label>
    						<input type="text" class="form-control text-center" name="contrasenaFE" value="<?php if(isset($clientData) && !empty($clientData))  { echo $clientData['contrasenaFE']; } ?>">
  						</div>
  						<div class=" col-6 col-sp-12">
    						<label class="form-label fw-bold" for="">TIV</label>
    						<input type="text" class="form-control text-center" disabled>
  						</div>
  					</div>
  					<hr>
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
  								<td>
  									<input type="text" class="form-control text-center" name="tipoTarifa" value="">
  								</td>
  								<td>
  									<input type="datetime-local" class="form-control text-center" name="periodoTarifa" value="">
  								</td>
  								<td>
  									<input type="date" class="form-control text-center" name="anoTarifacodigoActividad" value="">
  								</td>
  							</tbody>
  						</table>
  					</div>
  					<hr>
  					<button type="submit" class="btn btn-success">Editar Datos</button>
				</form>
  			</div>
		</div>
	</div>
</body>
</html>