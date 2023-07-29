<!-- Add Modal -->
<div class="modal fade" id="icth">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Agregar ICTH</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="icth_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="tipoExamen" class="col-sm-3 control-label">Tipo de Examen</label>
            <div class="col-sm-9">
              <select class="form-control" name="tipoExamen" id="tipoExamen">
                <option selected id="id_nombres"></option>
                <option value="Poligrafia">Poligrafia</option>
                <option value="Visita Domiciliaria">Visita Domiciliaria</option>
                <option value="Entrevista">Entrevista</option>
                <option value="Antecedentes">Antecedentes</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="fRealizacion" class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="fRealizacion" name="fRealizacion" required>
            </div>
          </div>
          <div class="form-group">
            <label for="archivo" class="col-sm-3 control-label">Subir Archivo</label>
            <div class="col-sm-9">
              <input type="file" name="archivo" id="archivo" required>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
          <i class="fa fa-close"></i> Cerrar
        </button>
        <button type="submit" class="btn btn-primary btn-flat" name="add">
          <i class="fa fa-save"></i> Guardar
        </button>
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
            <label for="edit_tipoExamen" class="col-sm-3 control-label">Tipo de Examen</label>
            <div class="col-sm-9">
              <select class="form-control" name="edit_tipoExamen" id="edit_tipoExamen">
                <option selected id="edit_gender_val"></option>
                <option value="Poligrafia">Poligrafia</option>
                <option value="Visita Domiciliaria">Visita Domiciliaria</option>
                <option value="Entrevista">Entrevista</option>
                <option value="Antecedentes">Antecedentes</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_fRealizacion" class="col-sm-3 control-label">Fecha</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="edit_fRealizacion" name="edit_fRealizacion" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_archivo" class="col-sm-3 control-label">Subir Archivo</label>
            <div class="col-sm-9">
              <input type="file" name="edit_archivo" id="edit_archivo" required>
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
        <h4 class="modal-title"><b>ELIMINAR ICTH</b></h4>
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









