<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Manager</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container mt-3">
		<div class="card text-center">
  		<div class="card-header bg-dark">
    		<h3 class="text-white">Nuevo Cliente</h3>
  		</div>
  		<div class="card-body">
  			<form action="index.php?controller=Client&action=store" method='POST' class="row g-1">
  				<div class="input-group mb-3 row">
  					<div class="mb-3 col-6 col-sp-12">
  						<label for="name" class="form-label">Nombre</label>
  						<input type="text" class="form-control text-center" name="name">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="regime" class="form-label">Regimen</label>
  						<input type="text" class="form-control text-center" name="regime">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="identificationCard" class="form-label">Cédula</label>
  						<input type="number" class="form-control text-center" name="identificationCard">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="legalRepresentative" class="form-label">Representante Legal</label>
  						<input type="text" class="form-control text-center" name="legalRepresentative">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="tradename" class="form-label">Nombre Comercial</label>
  						<input type="text" class="form-control text-center" name="tradename">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="identificationCardATV" class="form-label">Cédula ATV</label>
  						<input type="number" class="form-control text-center" name="identificationCardATV">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="phone" class="form-label">Teléfono</label>
  						<input type="tel" class="form-control text-center" name="phone">
					</div>
					<div class="col-6 col-sp-12">
  						<label for="passwordATV" class="form-label">ContraseñaATV</label>
  						<input type="text" class="form-control text-center" name="passwordATV">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="direction" class="form-label">Direción</label>
  						<input type="text" name="direction" class="form-control">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="emailFE" class="form-label">CorreoFE</label>
  						<input type="text" class="form-control text-center" name="emailFE">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="idLegalRepresentative" class="form-label">Cédula Representante Legal</label>
  						<input type="number" class="form-control text-center" name="idLegalRepresentative">
					</div>
					<div class="col-6 col-sp-12">
  						<label for="passwordFE" class="form-label">ContraseñaFE</label>
  						<input type="text" class="form-control text-center" name="passwordFE">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="tiv" class="form-label">TIV</label>
  						<input type="file" class="form-control" name="tivUrl" disabled>
					</div>
  				</div>
  				<hr>
  				<div class="input-group mb-3">
  					<div class="my-3 col-4">
  						<label for="taxReturnType" class="form-label">Tipo Declaración Tributaria</label>
  						<input type="text" name="taxReturnType" class="form-control text-center">
					</div>
					<div class="my-3 col-4">
  						<label for="taxDeclarationPeriod" class="form-label">Período Declariación Tributaria</label>
  						<input type="datetime-local" name="taxDeclarationPeriod" class="form-control text-center">
					</div>
					<div class="my-3 col-4">
  						<label for="yearTaxReturn" class="form-label">Año Declariación Tributaria</label>
  						<input type="date" name="yearTaxReturn" class="form-control text-center">
					</div>
  				</div>
  				<div class="m-1">
					<button type="success" class="btn btn-success">Agregar</button>
				</div>
  			</form>
  		</div>
	</div>
	</div>
</body>
</html>