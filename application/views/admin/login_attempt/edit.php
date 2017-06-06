<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open(''.$login_attempt['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
								<label for="ip_address" class="col-md-4 control-label">Ip Address</label>
								<div class="col-md-8">
									<input type="text" name="ip_address" value="<?php echo ($this->input->post('ip_address') ? $this->input->post('ip_address') : $login_attempt['ip_address']); ?>" class="form-control" id="ip_address" />
								</div>
							</div>
							<div class="form-group">
								<label for="login" class="col-md-4 control-label">Login</label>
								<div class="col-md-8">
									<input type="text" name="login" value="<?php echo ($this->input->post('login') ? $this->input->post('login') : $login_attempt['login']); ?>" class="form-control" id="login" />
								</div>
							</div>
							<div class="form-group">
								<label for="time" class="col-md-4 control-label">Time</label>
								<div class="col-md-8">
									<input type="text" name="time" value="<?php echo ($this->input->post('time') ? $this->input->post('time') : $login_attempt['time']); ?>" class="form-control" id="time" />
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