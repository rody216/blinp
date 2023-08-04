<!-- Add -->
<div class="modal fade" id="vehiculos">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Datos Vehiculares</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="vehiculos_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="tipo_Vehiculo" class="col-sm-3 control-label">Tipo Vehículo</label>

                  	<div class="col-sm-9">
                      <select class="form-control" name="tipo_Vehiculo" id="">
                        <option selected id="tipo_Vehiculo"></option>
                        <option value="Moto">Moto</option>
                        <option value="Automovil">Automovil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Camión">Camión</option>
                        <option value="Volqueta">Volqueta</option>
                        <option value="Retro">Retroescabadora</option>
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="placas" class="col-sm-3 control-label">Placas</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="" name="placas" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="modelo" class="col-sm-3 control-label">Modelo</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="" name="modelo" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="marca" class="col-sm-3 control-label">Marca</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="" name="marca" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="linea" class="col-sm-3 control-label">Linea</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="" name="linea" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="secretaria_Transito" class="col-sm-3 control-label">Secretaria de Tránsito</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="" name="secretaria_Transito" required>
                  	</div>
                </div>
                
                <div class="form-group">
                    <label for="documento" class="col-sm-3 control-label">Archivo</label>

                    <div class="col-sm-9">
                      <input type="file" name="documento" id="documento">
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


<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b>Actualiza tus Datos</h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="vehiculo_adit.php" enctype="multipart/form-data">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                  	<label for="edit_tipo" class="col-sm-3 control-label">Tipo Vehículo</label>
                  	<div class="col-sm-9">
                      <select class="form-control" name="tipo_Vehiculo" id="edit_tipo">
                        <option value="" selected>Seleccionar</option>
                        <option value="Moto">Moto</option>
                        <option value="Automovil">Automovil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Camión">Camión</option>
                        <option value="Volqueta">Volqueta</option>
                        <option value="Retroescabadora">Retroescabadora</option>
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_placa" class="col-sm-3 control-label">Placas</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_placa" name="placas" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_modelo" class="col-sm-3 control-label">Modelo</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_modelo" name="modelo" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_marca" class="col-sm-3 control-label">Marca</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_marca" name="marca" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_linea" class="col-sm-3 control-label">Linea</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_linea" name="linea" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_cede" class="col-sm-3 control-label">Secretaria de Tránsito</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_cede" name="secretaria_Transito" required>
                  	</div>
                </div>
                
                <div class="form-group">
                    <label for="edit_documento" class="col-sm-3 control-label">Archivo</label>
                    <div class="col-sm-9">
                      <input type="file" name="documento" id="edit_documento">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizar</button>
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
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="vehiculos_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>? Estas seguro de elimnar tus datos</p>
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