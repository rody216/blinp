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

<div class="form-group" id="registro_field">
  <label for="numero_documento" class="col-sm-3 control-label">Registro Civil</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="numero_documento" name="numero_documento">
  </div>
</div>

<div class="form-group" id="cedula_field">
  <label for="numero_documento" class="col-sm-3 control-label">Cédula</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="numero_documento" name="numero_documento">
  </div>
</div>

<div class="form-group" id="pasaporte_field">
  <label for="numero_pasaporte" class="col-sm-3 control-label">Número de Pasaporte</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="numero_pasaporte" name="numero_pasaporte">
  </div>
</div>

<div class="form-group" id="cedula_extranjeria_field">
  <label for="numero_cedula_extranjeria" class="col-sm-3 control-label">Número de Cédula de Extranjería</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="numero_cedula_extranjeria" name="numero_cedula_extranjeria">
  </div>
</div>

<div class="form-group" id="pep_field">
  <label for="numero_pep" class="col-sm-3 control-label">Número de PEP</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="numero_pep" name="numero_pep">
  </div>
</div>

<div class="form-group" id="ppt_field">
  <label for="numero_ppt" class="col-sm-3 control-label">Número de PPT</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="numero_ppt" name="numero_ppt">
  </div>
</div>

<div class="form-group">
  <label for="fecha_expedicion" class="col-sm-3 control-label">Fecha de Expedición</label>
  <div class="col-sm-9">
    <input type="date" class="form-control" id="fecha_expedicion" name="fecha_expedicion" required>
  </div>
</div>

<script>
  // Obtener el campo de selección y los campos de entrada adicionales por su ID
  const tipoDocumentoSelect = document.getElementById('tipo_documento');
  const registroField = document.getElementById('registro_field');
  const cedulaField = document.getElementById('cedula_field');
  const pasaporteField = document.getElementById('pasaporte_field');
  const cedulaExtranjeriaField = document.getElementById('cedula_extranjeria_field');
  const pepField = document.getElementById('pep_field');
  const pptField = document.getElementById('ppt_field');

  // Agregar un evento de cambio al campo de selección
  tipoDocumentoSelect.addEventListener('change', function() {
    // Obtener el valor seleccionado
    const seleccion = tipoDocumentoSelect.value;

    // Mostrar u ocultar los campos de entrada adicionales según la selección del campo de valor

    registroField.style.display = seleccion === 'registro' ? 'block' : 'none';
    cedulaField.style.display = seleccion === 'cedula' ? 'block' : 'none';
    pasaporteField.style.display = seleccion === 'pasaporte' ? 'block' : 'none';
    cedulaExtranjeriaField.style.display = seleccion === 'extrangeria' ? 'block' : 'none';
    pepField.style.display = seleccion === 'especial' ? 'block' : 'none';
    pptField.style.display = seleccion === 'personal' ? 'block' : 'none';
  });
</script>



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
            	<h4 class="modal-title"><b><span class=""></span></b> Actualiza tus Datos</h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                  	<label for="edit_documento" class="col-sm-3 control-label">Tipo Documento</label>
                  	<div class="col-sm-9">
                    <select class="form-control" name="numero_documento" id="edit_documento" required>
                    <option value="" selected> Seleccionar </option>
                        <option value="registro">Registro Civil</option>
                        <option value="cedula">Cedula</option>
                        <option value="pasaporte">Pasaporte</option>                        
                        <option value="extrangeria">Cédula de Extranjería</option>
                        <option value="especial">Permiso Especial de Permanencia (PEP)</option> 
                        <option value="personal">Permiso por Protección Temporar (PPT)</option>   
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
                    <label for="edit_rh" class="col-sm-3 control-label">Factor RH</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="factor_rh" id="factor_rh">
                        <option value="" selected> Seleccionar </option>
                        <option value="positivo">Positivo</option>
                        <option value="negativo">Negativo</option>                     
                      </select>
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
                    <select class="form-control" name="estado_civil" id="edit_estado">
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
            		<input type="hidden" class="empid" name="id">
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