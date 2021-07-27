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
		<div class="card text-center">
  		<div class="card-header bg-primary">
    		<h3 class="text-white">Nuevo Cliente</h3>
  		</div>
  		<div class="card-body">
  			<form action="index.php?controller=Client&action=store" method='POST' class="row g-1">
  				<div class="input-group mb-3">
  					<div class="mb-3 col-12">
  						<label for="name" class="form-label">Nombre</label>
  						<input type="text" class="form-control text-center" name="name" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="identificationCard" class="form-label">Cédula</label>
  						<input type="number" class="form-control text-center" name="identificationCard" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="identificationCardATV" class="form-label">Cédula ATV</label>
  						<input type="number" class="form-control text-center" name="identificationCardATV" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="tradename" class="form-label">Nombre Comercial</label>
  						<input type="text" class="form-control text-center" name="tradename" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="regime" class="form-label">Regimen</label>
  						<input type="text" class="form-control text-center" name="regime" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="phone" class="form-label">teléfono</label>
  						<input type="tel" class="form-control text-center" name="phone" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="direction" class="form-label">Dirreción</label>
  						<textarea class="form-control" name="direction" required></textarea>
					</div>
					<div class="mb-3 col-12">
  						<label for="legalRepresentative" class="form-label">Representante Legal</label>
  						<input type="text" class="form-control text-center" name="legalRepresentative" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="idLegalRepresentative" class="form-label">Cédula Representante Legal</label>
  						<input type="number" class="form-control text-center" name="idLegalRepresentative" required>
					</div>
					<div class="mb-3 col-12">
  						<label for="tiv" class="form-label">TIV</label>
  						<input type="file" class="form-control" name="tiv" disabled>
					</div>
					<div class="mb-3 col-12">
  						<label for="emailFE" class="form-label">CorreoFE</label>
  						<input type="text" class="form-control text-center" name="emailFE" required>
					</div>
					<div class="col-12">
  						<label for="passwordFE" class="form-label">ContraseñaFE</label>
  						<input type="text" class="form-control text-center" name="passwordFE" required>
					</div>
					<div class="col-12">
  						<label for="passwordATV" class="form-label">ContraseñaATV</label>
  						<input type="text" class="form-control text-center" name="passwordATV" required>
					</div>
  				</div>
  				<hr>
  				<div class="input-group mb-3"> 
  					<div class="my-3 col-6">
  						<label for="economicActivity" class="form-label">Actividad Economica</label>
  						<input type="text" name="economicActivity" class="form-control mr-1 text-center" required>
					</div>
					<div class="my-3 col-6">
  						<label for="activityCode" class="form-label">Código Actividad</label>
  						<input type="number" name="activityCode" class="form-control ml-1 text-center" required>
					</div>
  				</div>
  				<hr>
  				<div class="input-group mb-3">
  					<div class="my-3 col-4">
  						<label for="taxReturnType" class="form-label">Tipo Declaración Tributaria</label>
  						<input type="text" name="taxReturnType" class="form-control text-center" required>
					</div>
					<div class="my-3 col-4">
  						<label for="taxDeclarationPeriod" class="form-label">Período Declariación Tributaria</label>
  						<input type="datetime-local" name="taxDeclarationPeriod" class="form-control text-center" required>
					</div>
					<div class="my-3 col-4">
  						<label for="yearTaxReturn" class="form-label">Año Declariación Tributaria</label>
  						<input type="date" name="yearTaxReturn" class="form-control text-center" required>
					</div>
  				</div>
  				<div class="m-1">
					<button type="success" class="btn btn-success">Success</button>
				</div>
  			</form>
  		</div>
	</div>
	</div>
</body>
</html>