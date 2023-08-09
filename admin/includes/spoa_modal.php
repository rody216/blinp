<!-- Add -->
<div class="modal fade" id="spoa">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Datos Académicos</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="spoa_add.php" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Nr. Noticia:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="corrective" class="col-sm-3 control-label">Calidad:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="corrective" name="corrective" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Delito:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observations" class="col-sm-3 control-label">Fechas Hechos:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="observations" name="observations" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="corrective" class="col-sm-3 control-label">Amplición Hechos:</label>
                        <div class="col-sm-9">
                        <input type="textarea" class="form-control" id="corrective" name="corrective" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="documento" class="col-sm-3 control-label">Subir Documento</label>
                        <div class="col-sm-9">
                            <input type="file" name="documento" id="documento">
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
        <h4 class="modal-title"><b>Actualizar Datos</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="spoa_edit.php">
        <input type="hidden" class="empid" name="id"> 

        <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Nr. Noticia:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="corrective" class="col-sm-3 control-label">Calidad:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="corrective" name="corrective" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Delito:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observations" class="col-sm-3 control-label">Fechas Hechos:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="observations" name="observations" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="corrective" class="col-sm-3 control-label">Amplición Hechos:</label>
                        <div class="col-sm-9">
                        <input type="textarea" class="form-control" id="corrective" name="corrective" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="documento" class="col-sm-3 control-label">Subir Documento</label>
                        <div class="col-sm-9">
                            <input type="file" name="documento" id="documento">
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
        <form class="form-horizontal" method="POST" action="spoa_delet.php">
          <input type="hidden" class="empid" name="id">
          <div class="text-center">
            <!-- Confirmation message -->
            <h3>¿Estas seguro de Eliminar? </h3>
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

