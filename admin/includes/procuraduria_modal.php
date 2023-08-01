<!-- Add -->
<div class="modal fade" id="registro">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar datos Procuraduria</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="procuraduria_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="numeroCertificado" class="col-sm-3 control-label">Numero del Certifiado</label>
                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="numeroCertificado" name="numeroCertificado" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="fecha" class="col-sm-3 control-label">Fecha</label>
                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="fecha" name="fecha" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="hora" class="col-sm-3 control-label">Hora</label>
                  	<div class="col-sm-9">
                      <input type="time" class="form-control" id="hora" name="hora" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="resultado" class="col-sm-3 control-label">Resultado</label>
                  	<div class="col-sm-9"> 
                        <input type="text" class="form-control" id="resultado" name="resultado">
                      </div>
                  	</div>
                
                <div class="form-group">
                    <label for="siri" class="col-sm-3 control-label">Siri</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="siri" name="siri">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sancion" class="col-sm-3 control-label">Sanción</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="sancion" name="sancion">
                 </div>
                </div>
                <div class="form-group">
                    <label for="providencia" class="col-sm-3 control-label">Providencia</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="providencia" name="providencia">
                    </div>
                </div>
                <div class="form-group">
                    <label for="documento" class="col-sm-3 control-label">Pdf</label>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" id="documento" name="documento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fechaActualizacion" class="col-sm-3 control-label">Actualización</label>
                    <div class="col-sm-9">
                      <input type="datetime-local" name="fechaActualizacion" id="fechaActualizacion">
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
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class=""></span></b> Actualiza tus Datos</h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Certifiado</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Fecha</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Hora </label>
                    <div class="col-sm-9">
                    <input type="time" class="form-control" id="" name="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Resultados</label>
                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="" name="">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Siri</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Sanción</label>
                    <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Providencia</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_schedule" class="col-sm-3 control-label">Pdf</label>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
          	
              <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Actualización</label>
                    <div class="col-sm-9">
                    <input type="datetime-local" class="form-control" id="" name="">
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
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>? Estas seguro de Eliminar</p>
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