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
  			<form action="index.php?controller=Client&action=store" method='POST' enctype="multipart/form-data" class="row g-1">
  				<div class="input-group mb-3 row">
  					<div class="mb-3 col-6 col-sp-12">
  						<label for="name" class="form-label">Nombre</label>
  						<input type="text" class="form-control text-center" name="name">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="regime" class="form-label">Regimen</label>
  						<select class="form-select"  name="regime" aria-label="Default select example">
  								<option selected></option>
  								<option value="Régimen General">Régimen General</option>
  								<option value="Régimen Simplificado">Régimen Simplificado</option>
							</select>
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="identificationCard" class="form-label">Cédula</label>
  						<input type="text" class="form-control text-center" name="identificationCard">
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
  						<input type="text" class="form-control text-center" name="identificationCardATV">
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
  						<input type="text" class="form-control text-center" name="idLegalRepresentative">
					</div>
					<div class="col-6 col-sp-12">
  						<label for="passwordFE" class="form-label">ContraseñaFE</label>
  						<input type="text" class="form-control text-center" name="passwordFE">
					</div>
					<div class="mb-3 col-6 col-sp-12">
  						<label for="tiv" class="form-label">TIV</label>
  						<input type="file" class="form-control" name="tivUrl">
					</div>
  				</div>
  				<hr>
  				<div class="input-group mb-3 flex justify-content-around">
  					<div class="col-12">
  						<div class="my-3 col-12">
  							<label for="" class="form-label">Tipo Declaración Tributaria</label>
  							<select class="form-select" id="taxReturnType" name="taxReturnType" aria-label="Default select example">
  								<option selected>Seleccionar Tipo</option>
  								<option value="D101-Renta General">D101-Renta General</option>
  								<option value="D104-Iva General">D104-Iva General</option>
  								<option value="D105-Renta simplificado">D105-Renta simplificado</option>
  								<option value="D105-IVA simplificado">D105-IVA simplificado</option>
  								<option value="D-REA u otro tipo">D-REA u otro tipo</option>
							</select>
						</div>
						<div class="my-3 col-4 input-group">
							<div class="col-12" id="taxReturnYear">
  								<label for="yearTaxReturn" class="form-label">Año Declariación Tributaria</label>
  								<select class="form-select" id="taxReturnYearSelect" name="taxReturnYear" aria-label="Default select example">
  									<option selected>Seleccionar Año</option>
  									<option value="2021">2021</option>
  									<option value="2020">2020</option>
  									<option value="2019">2019</option>
  									<option value="2018">2018</option>
  									<option value="2017">2017</option>
  									<option value="2016">2016</option>
  									<option value="2015">2015</option>
  									<option value="2014">2014</option>
  									<option value="2013">2013</option>
  									<option value="2012">2012</option>
  									<option value="2011">2011</option>
								</select>
							</div>
							<div class="d-none" id="monthTaxReturn">
  								<label for="" class="form-label">Mes Declariación Tributaria</label>
  								<select class="form-select" id="taxReturnMonthSelect" name="taxReturnMonth" aria-label="Default select example">
  									<option selected>Seleccionar Mes</option>
  									<option value="Enero">Enero</option>
  									<option value="Febrero">Febrero</option>
  									<option value="Marzo">Marzo</option>
  									<option value="Abril">Abril</option>
  									<option value="Mayo">Mayo</option>
  									<option value="Junio">Junio</option>
  									<option value="Julio">Julio</option>
  									<option value="Agosto">Agosto</option>
  									<option value="Septiembre">Septiembre</option>
  									<option value="Octubre">Octubre</option>
  									<option value="Noviembre">Noviembre</option>
  									<option value="Diciembre">Diciembre</option>
								</select>
							</div>
							<div class="col-6 d-none" id="trimonthTaxReturn">
								<label for="" class="form-label">Trimestre Declariación Tributaria</label>
  								<select class="form-select" id="taxReturnTrimonthSelect" name="taxReturnTrimonth" aria-label="Default select example">
  									<option selected>Seleccionar Trimestre</option>
  									<option value="Ene-Feb-Mar">Ene-Feb-Mar</option>
  									<option value="Abr-May-Jun">Abr-May-Jun</option>
  									<option value="Jul-Ago-Sep">Jul-Ago-Sep</option>
  									<option value="Oct-Nov-Dici">Oct-Nov-Dici</option>
								</select>
							</div>
						</div>
						<div class="my-3 col-12">
  							<label for="url" class="form-label">Pdf Declaración</label>
  							<input type="file" name="pdfTaxReturn" class="form-control">
						</div>
						<div class="my-3 col-12">
  							<label for="url" class="form-label">Pdf Recibo</label>
  							<input type="file" name="pdfReceipt" class="form-control">
						</div>
  					</div>
  				</div>
  				<div class="m-1">
					<button type="success" class="btn btn-success">Crear</button>
				</div>
  			</form>
  		</div>
	</div>
	</div>
</body>
</html>