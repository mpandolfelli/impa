<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open('group/edit/'.$group['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
								<label for="name" class="col-md-4 control-label">Name</label>
								<div class="col-md-8">
									<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $group['name']); ?>" class="form-control" id="name" />
								</div>
							</div>
							<div class="form-group">
								<label for="description" class="col-md-4 control-label">Description</label>
								<div class="col-md-8">
									<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $group['description']); ?>" class="form-control" id="description" />
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