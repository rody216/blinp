<!-- Add -->
<div class="modal fade" id="mmp">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Ingresar Datos Mmp</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="mmp_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="fechaHechos" class="col-sm-3 control-label">Fecha</label>
                  	<div class="col-sm-9">
					  <input type="date" class="form-control" id="fechaHechos" name="fechaHechos" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lugarHechos" class="col-sm-3 control-label">Lugar</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lugarHechos" name="lugarHechos" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="articulo" class="col-sm-3 control-label">Articulo</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="articulo" name="articulo" required>
                  	</div>
                </div>
				<div class="form-group">
                    <label for="numeral" class="col-sm-3 control-label">Numeral</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="numeral" name="numeral">
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
            	<h4 class="modal-title"><b><span class="employee_id"></span></b>Actualiza tus Datos Financieros</h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="mmp_adit.php" enctype="multipart/form-data">
            		<input type="hidden" class="empid" name="id">
                    <div class="form-group">
                  	<label for="fechaHechos" class="col-sm-3 control-label">Fecha</label>
                  	<div class="col-sm-9">
					  <input type="date" class="form-control" id="edit_fechaHechos" name="fechaHechos" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lugarHechos" class="col-sm-3 control-label">Lugar</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_lugarHechos" name="lugarHechos" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="articulo" class="col-sm-3 control-label">Articulo</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_articulo" name="articulo" required>
                  	</div>
                </div>
				<div class="form-group">
                    <label for="numeral" class="col-sm-3 control-label">Numeral</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="edit_numeral" name="numeral">
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
            	<form class="form-horizontal" method="POST" action="mmp_delete.php">
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

