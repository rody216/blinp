<!-- Add -->
<div class="modal fade" id="usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Crear nuevo usuario</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="usuario_add.php">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Nombre del usuario</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Contraseña</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Apellido</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Imagen</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="photo" name="photo" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i> Cerrar
                </button>
                <button type="submit" class="btn btn-primary btn-flat" name="create">
                    <i class="fa fa-save"></i> Crear 
                </button>
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
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="usuario_delete.php">
            		<input type="hidden" class="decid" name="id">
            		<div class="text-center">
	                	<p>? Estas seguro de Eliminar el usuario ¿</p>
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


     