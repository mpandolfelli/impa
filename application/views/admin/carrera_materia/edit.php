<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edición Asignación de materia
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open(''.$carrera_materia['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
									<label for="carrera_id" class="col-md-4 control-label">Carrera Id</label>
									<div class="col-md-8">
										<select name="carrera_id" class="form-control">
											<option value="">select carrera</option>
											<?php 
											foreach($all_carreras as $carrera)
											{
												$selected = ($carrera['id'] == $carrera_materia['carrera_id']) ? ' selected="selected"' : "";

												echo '<option value="'.$carrera['id'].'" '.$selected.'>'.$carrera['nombre'].'</option>';
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
												$selected = ($materia['id'] == $carrera_materia['materia_id']) ? ' selected="selected"' : "";

												echo '<option value="'.$materia['id'].'" '.$selected.'>'.$materia['nombre'].'</option>';
											} 
											?>
										</select>
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