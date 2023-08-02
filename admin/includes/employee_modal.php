<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Datos</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
              <div class="form-group">
                  	<label for="numero_documento" class="col-sm-3 control-label">Tipo Documento</label>
                  	<div class="col-sm-9">
                    <select class="form-control" name="numero_documento" id="numero_documento" required>
                        <option value="" selected> Seleccionar </option>
                        <option value="cedula">Cedula</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="pasaporte">Registro Civil</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="pasaporte">Pasaporte</option> 
                        <option value="pasaporte">Pasaporte</option>
                      </select>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="fecha_expedicion" class="col-sm-3 control-label">Fechas Expedicción</label>
                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="fecha_expedicion" name="fecha_expedicion" required>
                  	</div>
                </div>

          		  <div class="form-group">
                  	<label for="primer_nombre" class="col-sm-3 control-label">Primer Nombre</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="primer_nombre" name="primer_nombre" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="segundo_nombre" class="col-sm-3 control-label">segundo Nombre</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="primer_apellido" class="col-sm-3 control-label">Primer Apellido</label>
                  	<div class="col-sm-9">
                    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="segundo_apellido" class="col-sm-3 control-label">Segundo Apellido</label>
                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido">
                      </div>
                  	</div>
              </div>

                <div class="form-group">
                    <label for="fecha_nacimiento" class="col-sm-3 control-label">Fecha Nacimiento</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edad" class="col-sm-3 control-label">Edad</label>
                    <div class="col-sm-9"> 
                    <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="edad" class="col-sm-3 control-label">Estatura</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipo_sangre" class="col-sm-3 control-label">Tipo Sangre</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="tipo_sangre" name="tipo_sangre">
                    </div>
                </div>

                <div class="form-group">
                    <label for="factor_rh" class="col-sm-3 control-label">Factor RH</label>

                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="factor_rh" name="factor_rh">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">Pais</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="pais" name="pais">
                    </div>
                </div>

                <div class="form-group">
                    <label for="departamento" class="col-sm-3 control-label">Departamento</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="departamento" name="departamento">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ciudad" class="col-sm-3 control-label">Ciudad</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion_residencia" class="col-sm-3 control-label">Dirección</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="direccion_residencia" name="direccion_residencia">
                    </div>
                </div>

                <div class="form-group">
                    <label for="estado_civil" class="col-sm-3 control-label">Estado Civil</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="estado_civil" id="estado_civil" required>
                        <option value="" selected> Seleccionar </option>
                        <option value="casado">Casado</option>
                        <option value="separado">Separado</option>
                        <option value="viudo">Viudo</option>
                        <option value="novia">Novia</option>                       
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Correo</label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="foto" class="col-sm-3 control-label">Imagen</label>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" id="foto" name="foto">
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
            		<input type="hidden" class="empid" name="id_personal">
                <div class="form-group">
                  	<label for="edit_documento" class="col-sm-3 control-label">Tipo Documento</label>
                  	<div class="col-sm-9">
                    <select class="form-control" name="numero_documento" id="edit_documento" required>
                        <option value="" selected> Seleccionar </option>
                        <option value="cedula">Cedula</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="pasaporte">Registro Civil</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="pasaporte">Pasaporte</option> 
                        <option value="pasaporte">Pasaporte</option>
                      </select>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="edit_expedicion" class="col-sm-3 control-label">Fechas Expedicción</label>
                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="edit_expedicion" name="fecha_expedicion" required>
                  	</div>
                </div>

          		  <div class="form-group">
                  	<label for="edit_primer" class="col-sm-3 control-label">Primer Nombre</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_primer" name="primer_nombre" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="edit_snombre" class="col-sm-3 control-label">segundo Nombre</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_snombre" name="segundo_nombre" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="edit_papellido" class="col-sm-3 control-label">Primer Apellido</label>
                  	<div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_papellido" name="primer_apellido" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="edit_sapellido" class="col-sm-3 control-label">Segundo Apellido</label>
                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_sapellido" name="segundo_apellido">
                      </div>
                  	</div>
              </div>

                <div class="form-group">
                    <label for="edit_nacimiento" class="col-sm-3 control-label">Fecha Nacimiento</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_nacimiento" name="fecha_nacimiento">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_edad" class="col-sm-3 control-label">Edad</label>
                    <div class="col-sm-9"> 
                    <input type="number" class="form-control" id="edit_edad" name="edad">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="edit_estatura" class="col-sm-3 control-label">Estatura</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="edit_estatura" name="estatura">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_sangre" class="col-sm-3 control-label">Tipo Sangre</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_sangre" name="tipo_sangre">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_rh" class="col-sm-3 control-label">Factor RH</label>

                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_rh" name="factor_rh">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_pais" class="col-sm-3 control-label">Pais</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_pais" name="pais">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_departamento" class="col-sm-3 control-label">Departamento</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_departamento" name="departamento">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_ciudad" class="col-sm-3 control-label">Ciudad</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_ciudad" name="ciudad">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_residencia" class="col-sm-3 control-label">Dirección</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_residencia" name="direccion_residencia">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_estado" class="col-sm-3 control-label">Estado Civil</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="estado_civil" id="edit_estado" required>
                        <option value="" selected> Seleccionar </option>
                        <option value="casado">Casado</option>
                        <option value="separado">Separado</option>
                        <option value="viudo">Viudo</option>
                        <option value="novia">Novia</option>                       
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_email" class="col-sm-3 control-label">Correo</label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" id="edit_email" name="email">
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
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id_personal">
            		<div class="text-center">
	                	<p>Estas seguro de Eliminar tus datos</p>
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