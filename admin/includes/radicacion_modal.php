<!-- Add -->
<div class="modal fade" id="radicacion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Rama Judicial Radicación</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="radicacion_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="numeroRadicacion" class="col-sm-3 control-label">Radicación</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="numeroRadicacion" name="numeroRadicacion" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="delitos" class="col-sm-3 control-label">Delitos</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="delitos" id="">
                                <option selected id="delitos"></option>
                                <option value="Robo">Robo</option>
                                <option value="Violación">Violación</option>
                                <option value="Homidicio">Homidicio</option>
                                <option value="Estafa">Estafa</option>
                                <option value="Robo a mano armada">Robo a mano armada</option>
                                <option value="Secuestro">Secuestro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="penaPrivativaAnos" class="col-sm-3 control-label">Pena</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penaPrivativaAnos" name="penaPrivativaAnos" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="penaPrivativaMeses" class="col-sm-3 control-label">Pena Meses</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="penaPrivativaMeses" name="penaPrivativaMeses" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="penaPrivativaDias" class="col-sm-3 control-label">Pena Días</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="penaPrivativaDias" name="penaPrivativaDias" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="sitioreclusion" class="col-sm-3 control-label">Reclusión</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sitioreclusion" name="sitioreclusion">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Ciudad" class="col-sm-3 control-label">Ciudad</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Ciudad" name="Ciudad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fecha" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fecha" name="fecha">
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
                <h4 class="modal-title"><b>Actualizar Rama Judicial Radicación</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="radicacion_adit.php">
                    <input type="hidden" class="empid" name="id">

                    <div class="form-group">
                        <label for="numeroRadicacion" class="col-sm-3 control-label">Radicación</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_numeroRadicacion" name="numeroRadicacion" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="delitos" class="col-sm-3 control-label">Delitos</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="delitos" id="edit_delitos">
                                <option selected id="delitos"></option>
                                <option value="Robo">Robo</option>
                                <option value="Violación">Violación</option>
                                <option value="Homidicio">Homidicio</option>
                                <option value="Estafa">Estafa</option>
                                <option value="Robo a mano armada">Robo a mano armada</option>
                                <option value="Secuestro">Secuestro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="penaPrivativaAnos" class="col-sm-3 control-label">Pena</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_pena" name="penaPrivativaAnos" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="penaPrivativaMeses" class="col-sm-3 control-label">Pena Meses</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_meses" name="penaPrivativaMeses" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="penaPrivativaDias" class="col-sm-3 control-label">Pena Días</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_dias" name="penaPrivativaDias" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="sitioreclusion" class="col-sm-3 control-label">Reclusión</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_reclusion" name="sitioreclusion">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Ciudad" class="col-sm-3 control-label">Ciudad</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_Ciudad" name="Ciudad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fecha" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="edit_fecha" name="fecha">
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
                <form class="form-horizontal" method="POST" action="radicacion_delete.php">
                    <input type="hidden" class="empid" name="id">
                    <div class="text-center">
                        <!-- Confirmation message -->
                        <h4> ¿Estas seguro de Eliminar los datos? </h4>
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