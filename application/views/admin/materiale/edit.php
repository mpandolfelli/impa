<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edición de material
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open(''.$materiale['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
									<label for="user_id" class="col-md-4 control-label">User Id</label>
									<div class="col-md-8">
										<select name="user_id" class="form-control">
											<option value="">select user</option>
											<?php 
											foreach($all_users as $user)
											{
												$selected = ($user['id'] == $materiale['user_id']) ? ' selected="selected"' : "";

												echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['email'].'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							<div class="form-group">
									<label for="materia_id" class="col-md-4 control-label">Materia Id</label>
									<div class="col-md-8">
										<select name="materia_id" class="form-control">
											<option value="">select materia</option>
											<?php 
											foreach($all_materias as $materia)
											{
												$selected = ($materia['id'] == $materiale['materia_id']) ? ' selected="selected"' : "";

												echo '<option value="'.$materia['id'].'" '.$selected.'>'.$materia['nombre'].'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							<div class="form-group">
								<label for="fecha" class="col-md-4 control-label">Fecha</label>
								<div class="col-md-8">
									<input type="text" name="fecha" value="<?php echo ($this->input->post('fecha') ? $this->input->post('fecha') : $materiale['fecha']); ?>" class="form-control" id="fecha" />
								</div>
							</div>
							<div class="form-group">
								<label for="titulo" class="col-md-4 control-label">Titulo</label>
								<div class="col-md-8">
									<input type="text" name="titulo" value="<?php echo ($this->input->post('titulo') ? $this->input->post('titulo') : $materiale['titulo']); ?>" class="form-control" id="titulo" />
								</div>
							</div>
							<div class="form-group">
								<label for="descripcion" class="col-md-4 control-label">Descripcion</label>
								<div class="col-md-8">
									<textarea name="descripcion" class="form-control" id="descripcion"><?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $materiale['descripcion']); ?></textarea>
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