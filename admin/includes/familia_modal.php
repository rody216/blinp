<!-- Add -->
<div class="modal fade" id="familia">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Familiar</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="familia_add.php" enctype="multipart/form-data">


				<div class="form-group">
                    <label for="edit_rh" class="col-sm-3 control-label">Parentesco</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="factor_rh" id="factor_rh">
                        <option value="" selected> Seleccionar </option>
                        <option value="padre">Padre</option>
                        <option value="madre">Madre</option>                    
                        <option value="esposa">Esposa</option>                    
                        <option value="esposa">Esposo</option>                  
                        <option value="esposa">Hija</option>                  
                        <option value="esposa">Hijo</option>
                      </select>
                    </div>
                </div>          
               
               
                <!-- <div class="form-group">
                    <label for="hermano" class="col-sm-3 control-label">Hermano</label>
                    <div class="col-sm-9">
                      <input type="text" placeholder="Nombre del hermano" class="form-control" id="hermano" name="hermano">
                    </div>
                </div> -->
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Ingresar</button>
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
            	<h4 class="modal-title"><b><span class="employee_id"></span>Actualizar datos Famillares</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="familia_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                  	<label for="conyugue" class="col-sm-3 control-label">Nr. Documento</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_conyugue" name="conyugue" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="hijo" class="col-sm-3 control-label">Nombre</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_hijo" name="hijo" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="padre" class="col-sm-3 control-label">Apellido</label>
                  	<div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_padre" name="padre" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="madre" class="col-sm-3 control-label">Parentesco</label>
                  	<div class="col-sm-9"> 
                        <input type="text" class="form-control" id="edit_madre" name="madre">
                      </div>
                </div>
                <div class="form-group">
                    <label for="hermano" class="col-sm-3 control-label">Accion</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_hermano" name="hermano">
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
            	<form class="form-horizontal" method="POST" action="familia_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>¿Estas seguro de eliminar tus datos familiares?</p>
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