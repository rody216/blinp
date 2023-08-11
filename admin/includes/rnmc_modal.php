<!-- Add -->
<div class="modal fade" id="rnmc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Agregar RNMC</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="rnmc_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="expediente" class="col-sm-3 control-label">Expediente</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="expediente" name="expediente" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fechaHechos" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fechaHechos" name="fechaHechos" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="departamento" class="col-sm-3 control-label">Departamento</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="departamento" name="departamento" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ciudad" class="col-sm-3 control-label">Ciudad</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="municipio" class="col-sm-3 control-label">Municipio</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="municipio" name="municipio" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="articulo" class="col-sm-3 control-label">Artículo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="articulo" name="articulo" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Actualizar Datos Rnmc</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="rnmc_edit.php">
                    <input type="hidden" class="empid" name="id">

                    <div class="form-group">
                    <label for="expediente" class="col-sm-3 control-label">Expedientes</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_expediente" name="expediente">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fechaHechos" class="col-sm-3 control-label">Fechas Hechos</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_fechaHechos" name="fechaHechos">
                    </div>
                </div>
                <div class="form-group">
                    <label for="departamento" class="col-sm-3 control-label">Departamentos</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_departamento" name="departamento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ciudad" class="col-sm-3 control-label">Ciudad</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_ciudad" name="ciudad">
                    </div>
                </div>
          	
              <div class="form-group">
                    <label for="municipio" class="col-sm-3 control-label">Municipio</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_municipio" name="municipio">
                    </div>
                </div>
          	
              <div class="form-group">
                    <label for="articulo" class="col-sm-3 control-label">Articulo</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_articulo" name="articulo">
                    </div>
                </div>


                    <!-- Move the submit button inside the form -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                            <i class="fa fa-close"></i> Cerrar
                        </button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit">
                            <i class="fa fa-check-square-o"></i> Actualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Modal header content -->
            </div>
            <div class="modal-body">
                <!-- Modal body content -->
                <form class="form-horizontal" method="POST" action="rnmc_delete.php">
                    <input type="hidden" class="empid" name="id">
                    <div class="text-center">
                        <!-- Confirmation message -->
                        <h3> ¿Estas seguro de Eliminar? </h3>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i> Cerrar
                </button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete">
                    <i class="fa fa-trash"></i> Eliminar
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>