<!-- Add -->
<div class="modal fade" id="parentesco">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Ingresar Tipos de Parentesco</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="parentesco_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="parentesco" class="col-sm-3 control-label">Parentescos</label>
                  	<div class="col-sm-9">
					  <input type="text" class="form-control" id="parentesco" name="parentesco" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="tipoParentesco" class="col-sm-3 control-label">Parentescos</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="tipoParentesco" name="tipoParentesco" required>
                  	</div>
                </div>
                
				
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> NewParentesco</button>
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
            	<form class="form-horizontal" method="POST" action="familia_edit.php" enctype="multipart/form-data">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                  	<label for="entidad" class="col-sm-3 control-label">Entidad Financiera</label>
                  	<div class="col-sm-9">
					  <input type="text" class="form-control" id="edit_entidad" name="entidad" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="tipoProducto" class="col-sm-3 control-label">Tipo de Producto</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_tipo" name="tipoProducto" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="numeroProduct" class="col-sm-3 control-label">Numero Producto</label>
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_numero" name="numeroProduct" required>
                  	</div>
                </div>  
				<div class="form-group">
                    <label for="archivo" class="col-sm-3 control-label">Archivo</label>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" id="edit_archivo" name="archivo">
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
            	<form class="form-horizontal" method="POST" action="finanzas_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>¿Estas seguro de elimnar tus datos?</p>
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

