<!-- Add -->
<div class="modal fade" id="inmuebles">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Propiedades Inmuebles</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inmueble_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ciudad" class="col-sm-3 control-label">Ciudad</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="oficina" class="col-sm-3 control-label">Oficina</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="oficina" name="oficina" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matricula" class="col-sm-3 control-label">Matricula</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="matricula" name="matricula" required>
                        </div>
                    </div>               
                    <div class="form-group">
                        <label for="direccion" class="col-sm-3 control-label">Direccion</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>             
                    <div class="form-group">
                        <label for="documento" class="col-sm-3 control-label">Subir Documento</label>
                        <div class="col-sm-9">
                            <input type="file" name="documento" id="documento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha de Actualización</label>
                        <div class="col-sm-9">
                            <input type="date" name="date" id="date">
                        </div>
                    </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b><span class="employee_id"></span>Propiedades Inmuebles</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inmueble_edit.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="edit_ciudad" class="col-sm-3 control-label">Ciudad</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_ciudad" name="ciudad" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="edit_oficina" class="col-sm-3 control-label">Oficina</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_oficina" name="oficina" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_matricula" class="col-sm-3 control-label">Matricula</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_matricula" name="matricula" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_direccion" class="col-sm-3 control-label">Direccion</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_direccion" name="Direccion">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_documento" class="col-sm-3 control-label">Subir Documento</label>
                        <div class="col-sm-9">
                            <input type="file" name="documento" id="edit_documento">
                        </div>
                    </div>
                <div class="form-group">
                        <label for="edit_fechas" class="col-sm-3 control-label">Fecha de Actualización</label>
                        <div class="col-sm-9">
                            <input type="date" name="fechaActualizacion" id="edit_fechas">
                        </div>
                    </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                <i class="fa fa-close"></i> Cerrar
            </button>
            <button type="submit" class="btn btn-success btn-flat" name="edit">
                <i class="fa fa-check-square-o"></i> Actualizar
            </button>
        </div>
    </div>
 </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="inmueble_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>? Estas seguro de Elimimar la Propiedad ¿</p>
	                	<h2 class="bold del_employee_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Eliminar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>    