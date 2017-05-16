<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Nueva noticía
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
						<?php echo form_open('noticia/add',array("class"=>"form-horizontal","enctype"=>"multipart/form-data")); ?>

							<div class="form-group">
									<label for="categoria_id" class="col-md-2 control-label">Categoria Id</label>
									<div class="col-md-10">
										<select name="categoria_id" class="form-control">
											<option value="">select categoria</option>
											<?php 
											foreach($all_categorias as $categoria)
											{
												$selected = ($categoria['id'] == $this->input->post('categoria_id')) ? ' selected="selected"' : "";

												echo '<option value="'.$categoria['id'].'" '.$selected.'>'.$categoria['nombre'].'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							<div class="form-group">
									<label for="user_id" class="col-md-2 control-label">User Id</label>
									<div class="col-md-10">
										<select name="user_id" class="form-control">
											<option value="">select user</option>
											<?php 
											foreach($all_users as $user)
											{
												$selected = ($user['id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

												echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['email'].'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							<div class="form-group">
								<label for="titulo" class="col-md-2 control-label">Titulo</label>
								<div class="col-md-10">
									<input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control" id="titulo" />
								</div>
							</div>
						
							<div class="form-group">
								<label for="copete" class="col-md-2 control-label">Copete</label>
								<div class="col-md-10">
									<textarea name="copete" class="form-control" id="copete"><?php echo $this->input->post('copete'); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="descripcion" class="col-md-2 control-label">Descripcion</label>
								<div class="col-md-10">
									<textarea name="descripcion" class="form-control wishiwi" id="descripcion"><?php echo $this->input->post('descripcion'); ?></textarea>
								</div>
							</div>							
							<div class="form-group">
								<label for="descripcion" class="col-md-2 control-label">Imagenes</label>
								<div class="col-md-10">
									 <input type="file" id="files" class="file-margin" name="files[]" accept="image/*" multiple>
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