<!-- Add -->
<div class="modal fade" id="antecedentes">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Antecedentes Disciplinarios</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="antecedentes_add.php">
                    <div class="form-group">
                        <label for="infraccion" class="col-sm-3 control-label">Infracción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="infraccion" name="infraccion" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correctivo" class="col-sm-3 control-label">Correctivo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="correctivo" name="correctivo" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="obs" class="col-sm-3 control-label">Observaciones</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="obs" name="obs" required>
                        </div>
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
            	<h4 class="modal-title"><b>Actualizar  Antecedentes Diciplinarios</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="antecedentes_edit.php">
            		<input type="hidden" class="decid" name="id">
                <div class="form-group">
                    <label for="edit_infraccion" class="col-sm-3 control-label">infracción</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_infraccion" name="infraccion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_correctivo" class="col-sm-3 control-label">Correctivo</label>

                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_correctivo" name="correctivo">

                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_fecha" class="col-sm-3 control-label">Fecha</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_fecha" name="fecha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_obs" class="col-sm-3 control-label">Observaciones</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_obs" name="obs">
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
            	<h4 class="modal-title"><b>Eliminando...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="antecedentes_delete.php">
            		<input type="hidden" class="decid" name="id">
            		<div class="text-center">
	                	<p>? Estas seguro de Eliminar el antecedente ¿</p>
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


     