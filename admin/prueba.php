<!-- Add -->
<div class="modal fade" id="spoa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Antecedentes Spoa</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="spoa_add.php">
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Id Persona:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
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
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i> Cerrar
                </button>
                <button type="submit" class="btn btn-primary btn-flat" name="add">
                    <i class="fa fa-save"></i> Guardar
                </button>
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
            	<h4 class="modal-title"><b>Actualizar  Antecedentes Espoa</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="spoa_edit.php">
            		<input type="hidden" class="decid" name="id">
                <div class="form-group">
                    <label for="edit_description" class="col-sm-3 control-label">Noticias</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_description" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-3 control-label">Calidad</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_amount" name="amount">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-3 control-label">Delito</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_amount" name="amount">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-3 control-label">Fechas Hechos</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_amount" name="amount">
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
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="spoa_delet.php">
            		<input type="hidden" class="decid" name="id">
            		<div class="text-center">
	                	<p>?Estas seguro de Eliminar Spoa¿</p>
	                	<h2 id="del_deduction" class="bold"></h2>
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


     