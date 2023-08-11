<!-- Add -->
<div class="modal fade" id="addnew">
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
                <label for="tipo_documento" class="col-sm-3 control-label">Tipo Documento</label>
                <div class="col-sm-9">
                  <select class="form-control" name="tipo_documento" id="tipo_documento" required>
                    <option value="" selected>Seleccionar</option>
                    <option value="registro">Registro Civil</option>
                    <option value="cedula">Cedula</option>
                    <option value="pasaporte">Pasaporte</option>
                    <option value="extrangeria">Cédula de Extranjería</option>
                    <option value="especial">Permiso Especial de Permanencia (PEP)</option> 
                    <option value="personal">Permiso por Protección Temporar (PPT)</option>                       
                  </select>
                </div>
              </div>

           

              <div class="form-group" id="cedula_field" style="display: none;">
              <label for="numero_documento" class="col-sm-3 control-label">Cédula</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="numero_documento" name="numero_documento" oninput="this.value = this.value.toUpperCase()" pattern="[A-Za-z0-9]+">
              </div>
            </div>

             
              <script>
              const tipoDocumentoSelect = document.getElementById('tipo_documento');
              const cedulaField = document.getElementById('cedula_field');

              tipoDocumentoSelect.addEventListener('change', function() {
                const seleccion = tipoDocumentoSelect.value;

                if (seleccion === 'cedula') {
                  cedulaField.style.display = 'block';
                } else {
                  cedulaField.style.display = 'none';
                }
              });
             </script>

                <div class="form-group">
                <label for="fecha_expedicion" class="col-sm-3 control-label">Fecha de Expedición</label>
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
                        <input type="number" class="form-control" id="edad" name="edad" readonly>
                  </div>
                </div>

                    <script>
                        const fechaNacimientoInput = document.getElementById("fecha_nacimiento");
                        const edadInput = document.getElementById("edad");

                        fechaNacimientoInput.addEventListener("input", function () {
                            const fechaNacimiento = new Date(this.value);
                            const fechaActual = new Date();

                            let edad = fechaActual.getFullYear() - fechaNacimiento.getFullYear();

                            if (
                            fechaNacimiento.getMonth() > fechaActual.getMonth() ||
                            (fechaNacimiento.getMonth() === fechaActual.getMonth() &&
                                fechaNacimiento.getDate() > fechaActual.getDate())
                            ) {
                            edad--;
                            }

                            edadInput.value = edad;
                        });
                     </script>


               
                <div class="form-group">
                <label for="estatura" class="col-sm-3 control-label">Estatura</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="estatura" name="estatura" step="0.01">
                </div>
                </div>

                <div class="form-group">
                    <label for="tipo_sangre" class="col-sm-3 control-label">Tipo Sangre</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="tipo_sangre" id="tipo_sangre">
                        <option value="" selected> Seleccionar </option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="ab">AB</option>
                        <option value="o">O</option>                        
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="factor_rh" class="col-sm-3 control-label">Factor RH</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="factor_rh" id="factor_rh">
                        <option value="" selected> Seleccionar </option>
                        <option value="positivo">Positivo</option>
                        <option value="negativo">Negativo</option>                     
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">Pais</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="pais" id="pais" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                        $sql = "SELECT * FROM paises ORDER BY nombre ASC";
                        $query = $conn->query($sql);
                        while ($row = $query->fetch_assoc()) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                        }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="departamento" class="col-sm-3 control-label">Departamento</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="departamento" id="departamento" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                        $sql = "SELECT * FROM departamentos ORDER BY nombre ASC";
                        $query = $conn->query($sql);
                        while ($row = $query->fetch_assoc()) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                        }
                        ?>
                       
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ciudad" class="col-sm-3 control-label">Ciudad</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="ciudad" id="ciudad" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                        $sql = "SELECT * FROM municipios ORDER BY nombre ASC";
                        $query = $conn->query($sql);
                        while ($row = $query->fetch_assoc()) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                        }
                        ?>
                       
                      </select>
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
                    <select class="form-control" name="estado_civil" id="estado_civil">
                        <option value="" selected> Seleccionar </option>
                        <option value="casado">Casado</option>
                        <option value="separado">Separado</option>
                        <option value="viudo">Viudo</option>
                        <option value="novia">Nombre del Novia</option> 
                        <option value="novia">Nombre de la Novia</option>                         
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
            	<h4 class="modal-title"><b><span class="employee_id"></span>Actualizar datos Famillares</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="familia_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                  	<label for="conyugue" class="col-sm-3 control-label">Conyugue</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_conyugue" name="conyugue" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="hijo" class="col-sm-3 control-label">Hijo</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_hijo" name="hijo" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="padre" class="col-sm-3 control-label">Padre</label>
                  	<div class="col-sm-9">
                    <input type="text" class="form-control" id="edit_padre" name="padre" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="madre" class="col-sm-3 control-label">Madre</label>
                  	<div class="col-sm-9"> 
                        <input type="text" class="form-control" id="edit_madre" name="madre">
                      </div>
                </div>
                <div class="form-group">
                    <label for="hermano" class="col-sm-3 control-label">Hermano</label>
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
	                	<p>? Estas seguro de eliminar tus datos familiares ¿</p>
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