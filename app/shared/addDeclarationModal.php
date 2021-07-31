<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Declaracion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?controller=Client&action=addTaxReturn" method="POST" enctype="multipart/form-data" class="row">
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
                                <label for="" class="form-label">Año Declariación Tributaria</label>
                                <select class="form-select" name="taxReturnYear" aria-label="Default select example">
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
                                <select class="form-select" name="taxReturnMonth" aria-label="Default select example">
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
                                <select class="form-select" name="taxReturnTrimonth" aria-label="Default select example">
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
                            <input type="file" class="form-control" name="pdfDeclaration">
                        </div>
                        <div class="my-3 col-12">
                            <label for="url" class="form-label">Pdf Recibo</label>
                            <input type="file" class="form-control" name="pdfReceipt">
                        </div>
                        <input type="hidden" name="clientId" value="<?php echo $clientId ?>"> 
                    </div>
                </div>
                <button type="submit" class="btn btn-success rounded-0">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>