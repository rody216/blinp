<!-- Add Modal -->
<div class="modal fade" id="icth">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>UBICA</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="icth_add.php" enctype="multipart/form-data">
        <div class="form-group">
        <label for="tipo_Examen" class="col-sm-3 control-label">Tipo de Examen</label>
        <div class="col-sm-9">
            <select class="form-control" name="tipo_Examen" id="tipo_Examen" required>
                <option value="" disabled selected>Seleccionar</option>
                <option value="Poligrafia">Poligrafia</option>
                <option value="Visita Domiciliaria">Visita Domiciliaria</option>                
                <option value="Entrevista">Entrevista</option>
                <option value="Antecedentes">Antecedentes</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="fecha" class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
          </div>
          <div class="form-group">
            <label for="archivo" class="col-sm-3 control-label">Subir Archivo</label>
            <div class="col-sm-9">
              <input type="file" name="archivo" id="archivo" required>
            </div>
          </div>
        
          <!-- Botón para enviar el formulario -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
              <i class="fa fa-close"></i> Cerrar
            </button>
            <button type="submit" class="btn btn-primary btn-flat" name="add">
              <i class="fa fa-save"></i> Crear Icth
            </button>
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
        <h4 class="modal-title"><b>Editar ICTH</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="icth_edit.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="edit_gender" class="col-sm-3 control-label">Tipo de Examen</label>
            <div class="col-sm-9">
              <select class="form-control" name="tipo_Examen" id="edit_gender">               
                <option selected id="tipo_Examen">Seleccionar</option>
                <option value="Poligrafia">Poligrafia</option>
                <option value="Visita Domiciliaria">Visita Domiciliaria</option>
                <option value="Entrevista">Entrevista</option>
                <option value="Antecedentes">Antecedentes</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_fecha" class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="edit_fecha" name="fecha" required>
            </div>
          </div>

          <div class="form-group">
            <label for="archivo_date" class="col-sm-3 control-label">Subir Archivo</label>
            <div class="col-sm-9">
              <input type="file" name="archivo" id="archivo_date" required>
            </div>
          </div>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
          <i class="fa fa-close"></i> Cerrar
        </button>
        <button type="submit" class="btn btn-primary btn-flat" name="edit">
          <i class="fa fa-save"></i> Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>¿Seguro que quieres eliminar?</b></h4>
      </div>
      
     
        <div class="modal-body">
        <form class="form-horizontal" method="POST" action="icth_delete.php">
          <input type="hidden" class="empid" name="id">
          
         
             <div class="text-center">
            <h2 class="bold del_employee_name"></h2>
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









