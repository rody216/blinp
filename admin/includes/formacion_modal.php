<!-- Add -->
<div class="modal fade" id="formacion">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Datos Académicos</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Tipo de Registro</label>
                  	<div class="col-sm-9">
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="Bachiller">Bachiller</option>
                        <option value="Técnico">Técnico</option>
                        <option value="Tecnólogo">Tecnólogo</option>
                        <option value="Pregrado">Pregrado</option>
                        <option value="Posgrado">Posgrado</option>
                        <option value="Maestría">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                      </select>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="institution" class="col-sm-3 control-label">Institución</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="institution" name="institution" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="graduation_date" class="col-sm-3 control-label">Fecha de Graduación</label>
                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="graduation_date" name="graduation_date">
                      </div>
                  	</div>
                </div>  
                <div class="form-group">
                  	<label for="degree_obtained" class="col-sm-3 control-label">Título Obtenido</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="degree_obtained" name="degree_obtained" required>
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

<!-- Resto del código y scripts... -->


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Actualizar Datos Academicos</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="employee_edit.php">
                    <input type="hidden" class="empid" name="id">
                   
                    <div class="form-group">
                        <label for="edit_gender" class="col-sm-3 control-label">Tipo de Registro</label>
                        <div class="col-sm-9"> 
                            <select class="form-control" name="gender" id="edit_gender" required>
                                <option value="" selected>Seleccionar</option>
                                <option value="Bachiller">Bachiller</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Tecnólogo">Tecnólogo</option>
                                <option value="Pregrado">Pregrado</option>
                                <option value="Posgrado">Posgrado</option>
                                <option value="Maestría">Maestría</option>
                                <option value="Doctorado">Doctorado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="institution" class="col-sm-3 control-label">Institución</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="institution" name="institution" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="graduation_date" class="col-sm-3 control-label">Fecha de Graduación</label>
                        <div class="col-sm-9"> 
                            <div class="date">
                                <input type="text" class="form-control" id="graduation_date" name="graduation_date">
                            </div>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="degree_obtained" class="col-sm-3 control-label">Título Obtenido</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="degree_obtained" name="degree_obtained" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i> Cerrar
                </button>
                <button type="submit" class="btn btn-success btn-flat" name="edit">
                    <i class="fa fa-check-square-o"></i> Actualizar
                </button>
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
            	<form class="form-horizontal" method="POST" action="formacion_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
                      <p>? Estas seguro de Eliminar la formación Academica ¿</p>
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

