<!-- Add -->
<div class="modal fade" id="judicial">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Rama Judicial Procesos</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="rama_judicial_p_add.php" enctype="multipart/form-data">
                <div class="form-group">
            <label for="numeroProceso" class="col-sm-3 control-label">Número de Procesos</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" id="numeroProceso" name="numeroProceso" required>
            </div>
          </div>

          <div class="form-group">
            <label for="fechaRadicacion" class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
			<input type="date" class="form-control" id="fechaRadicacion" name="fechaRadicacion" required>
            </div>
          </div>

          <div class="form-group">
            <label for="tipoProceso" class="col-sm-3 control-label">Tipo de proceso</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tipoProceso" name="tipoProceso" required>
              </div>
            </div>
          

          <div class="form-group">
            <label for="clase" class="col-sm-3 control-label">Clase</label>
            <div class="col-sm-9">
			<select class="form-control" name="clase" id="clase" required>
                <option value="" selected> Seleccionar </option>
				<option value="Demandado">Demandado</option>
                <option value="Demandante">Demandante</option>   
                </select>
            </div>
          </div>

		  <div class="form-group">
            <label for="estatus" class="col-sm-3 control-label">Estatus</label>
            <div class="col-sm-9">
			  <input type="text" class="form-control" id="estatus" name="estatus" required>
              </div>
            </div>
          

		  <div class="form-group">
            <label for="pdf" class="col-sm-3 control-label">Archivo</label>
            <div class="col-sm-9">
			  <input type="file" class="form-control" id="pdf" name="pdf">
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
        <h4 class="modal-title"><b>Actualizar Rama Judicial Procesos</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="rama_judicial_edit.php">
        <input type="hidden" class="empid" name="id"> 

		<div class="form-group">
            <label for="numeroProceso" class="col-sm-3 control-label">Número de Procesos</label>
            <div class="col-sm-9">
			<input type="text" class="form-control" id="edit_numeroProceso" name="numeroProceso" required>
            </div>
          </div>

          <div class="form-group">
            <label for="fechaRadicacion" class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
			<input type="date" class="form-control" id="edit_fechaRadicacion" name="fechaRadicacion" required>
            </div>
          </div>

          <div class="form-group">
            <label for="tipoProceso" class="col-sm-3 control-label">Tipo de proceso</label>
            <div class="col-sm-9">              
              <input type="text" class="form-control" id="edit_tipoProceso" name="tipoProceso" required>
              </div>
            </div>
          

			<div class="form-group">
            <label for="clase" class="col-sm-3 control-label">Clase</label>
            <div class="col-sm-9">
			<select class="form-control" name="clase" id="clase" required>
                <option value="" selected> Seleccionar </option>
				<option value="Demandado">Demandado</option>
                <option value="Demandante">Demandante</option>   
                </select>
            </div>
          </div>

		  <div class="form-group">
            <label for="estatus" class="col-sm-3 control-label">Estatus</label>
            <div class="col-sm-9">
			  <input type="text" class="form-control" id="edit_estatus" name="estatus" required>
              </div>
            </div>
          

		  <div class="form-group">
            <label for="pdf" class="col-sm-3 control-label">Archivo</label>
            <div class="col-sm-9">
			  <input type="file" class="form-control" id="edit_pdf" name="pdf">
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
        <form class="form-horizontal" method="POST" action="rama_judicial_delete.php">
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

