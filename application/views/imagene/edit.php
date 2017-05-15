<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open('imagene/edit/'.$imagene['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
									<label for="noticia_id" class="col-md-4 control-label">Noticia Id</label>
									<div class="col-md-8">
										<select name="noticia_id" class="form-control">
											<option value="">select noticia</option>
											<?php 
											foreach($all_noticias as $noticia)
											{
												$selected = ($noticia['id'] == $imagene['noticia_id']) ? ' selected="selected"' : "";

												echo '<option value="'.$noticia['id'].'" '.$selected.'>'.$noticia['id'].'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							<div class="form-group">
								<label for="nombre" class="col-md-4 control-label">Nombre</label>
								<div class="col-md-8">
									<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $imagene['nombre']); ?>" class="form-control" id="nombre" />
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