<!-- Add -->
<div class="modal fade" id="ponal">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Datos Ponal</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="ponal_add.php" enctype="multipart/form-data">
              <div class="form-group">
                  	<label for="edit_id" class="col-sm-3 control-label">Id Personal</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="personas_id" name="personas_id" required>
                  	</div>
                </div>
				<div class="form-group">
                  	<label for="fecha" class="col-sm-3 control-label">Fecha del delito</label>
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
                    <select class="form-control" name="resultado" id="resultado">
                        <option value="" selected> Seleccionar </option>
                        <option value="No tiene asuntos pendientes con la autoridades judiciales.">No tiene asuntos pendientes con la autoridades judiciales.</option>
                        <option value="Actualmente no es requerido por autoridad judicial">Actualmente no es requerido por autoridad judicial.</option>                       
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="fechaActualizacion" class="col-sm-3 control-label">Fechas de Actualización</label>
                  	<div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_fechaActualizacion" name="fechaActualizacion" required>
                  	</div>
                </div>
               
                <div class="form-group">
                    <label for="archivo" class="col-sm-3 control-label">Archivo</label>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" id="archivo" name="archivo">
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
        <h4 class="modal-title"><b>Actualizar Datos Ponal</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="ponal_edit.php">
        <input type="hidden" class="empid" name="id"> 
        <div class="form-group">
                  	<label for="edit_id" class="col-sm-3 control-label">Personal ID</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_id" name="personas_id" required>
                  	</div>
                </div>
                   <div class="form-group">
                  	<label for="fecha" class="col-sm-3 control-label">Fechas</label>
                  	<div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_fecha" name="fecha" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="hora" class="col-sm-3 control-label">Hora</label>
                  	<div class="col-sm-9">
                    	<input type="time" class="form-control" id="edit_hora" name="hora" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="resultado" class="col-sm-3 control-label">Resultado</label>
                  	<div class="col-sm-9">
                    <select class="form-control" name="resultado" id="edit_resultado">
                        <option value="" selected> Seleccionar </option>
                        <option value="No tiene asuntos pendientes con la autoridades judiciales.">No tiene asuntos pendientes con la autoridades judiciales.</option>
                        <option value="Actualmente no es requerido por autoridad judicial.">Actualmente no es requerido por autoridad judicial.</option>                       
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="fechaActualizacion" class="col-sm-3 control-label">Fechas de Actualización</label>
                  	<div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_fechaActualizacion" name="fechaActualizacion" required>
                  	</div>
                </div>
               
                <div class="form-group">
                    <label for="archivo" class="col-sm-3 control-label">Archivo</label>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" id="archivo" name="archivo">
                    </div>
                </div>
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
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="ponal_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
                  <p>? Estas seguro de eliminar tus datos ponal ¿</p>
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



