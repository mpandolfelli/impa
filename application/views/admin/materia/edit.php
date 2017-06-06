<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edición de materia
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open(''.$materia['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
								<label for="nombre" class="col-md-4 control-label">Nombre</label>
								<div class="col-md-8">
									<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $materia['nombre']); ?>" class="form-control" id="nombre" />
								</div>
							</div>
							<div class="form-group">
								<label for="horario" class="col-md-4 control-label">Horario</label>
								<div class="col-md-8">
									<input type="text" name="horario" value="<?php echo ($this->input->post('horario') ? $this->input->post('horario') : $materia['horario']); ?>" class="form-control" id="horario" />
								</div>
							</div>
							<div class="form-group">
								<label for="descripcion" class="col-md-4 control-label">Descripcion</label>
								<div class="col-md-8">
									<textarea name="descripcion" class="form-control" id="descripcion"><?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $materia['descripcion']); ?></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" class="btn btn-success">
										<i class="fa fa-check"></i> Save
									</button>
						        </div>
							</div>
							
						<?php echo form_close(); ?>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>