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
            	<form class="form-horizontal" method="POST" action="formation_add.php" enctype="multipart/form-data">
                <div class="form-group">
            <label for="nivel" class="col-sm-3 control-label">Tipo de Registro</label>
            <div class="col-sm-9">
              <select class="form-control" name="nivel" id="nivel" required>
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
            <label for="date" class="col-sm-3 control-label">Fecha de Graduación</label>
            <div class="col-sm-9">
              <div class="date">
              <input type="date" class="form-control" id="date" name="date">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="titulo" class="col-sm-3 control-label">Título Obtenido</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="titulo" name="titulo" required>
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
        <h4 class="modal-title"><b>Actualizar Datos Académicos</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="formation_edit.php">
        <input type="hidden" class="empid" name="id"> 

          <div class="form-group">
          <label for="edit_gender" class="col-sm-3 control-label">Tipo de Registro</label>
          <div class="col-sm-9">    
            <select class="form-control" name="nivel" id="edit_gender" required>
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
          <label for="edit_institution" class="col-sm-3 control-label">Institución</label>  
           <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_institution" name="institution" required>
            </div>
          </div>
          
          <div class="form-group">  
           <label for="graduation_date" class="col-sm-3 control-label">Fecha de Graduación</label>
            <div class="col-sm-9">
              <div class="date">                
              <input type="text" class="form-control" id="graduation_date" name="fecha">
              </div>
            </div>          
            </div>

          <div class="form-group">
         <label for="degree_obtained" class="col-sm-3 control-label">Título Obtenido</label>
         <div class="col-sm-9">    
           <input type="text" class="form-control" id="edit_titulo" name="titulo" required>
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
        <form class="form-horizontal" method="POST" action="formacion_delete.php">
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

