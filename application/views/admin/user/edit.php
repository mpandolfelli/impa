<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						
						<?php echo form_open(''.$user['id'],array("class"=>"form-horizontal")); ?>

							<div class="form-group">
								<label for="password" class="col-md-4 control-label">Password</label>
								<div class="col-md-8">
									<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
								</div>
							</div>
							<div class="form-group">
								<label for="forgotten_password_code" class="col-md-4 control-label">Forgotten Password Code</label>
								<div class="col-md-8">
									<input type="text" name="forgotten_password_code" value="<?php echo ($this->input->post('forgotten_password_code') ? $this->input->post('forgotten_password_code') : $user['forgotten_password_code']); ?>" class="form-control" id="forgotten_password_code" />
								</div>
							</div>
							<div class="form-group">
								<label for="forgotten_password_time" class="col-md-4 control-label">Forgotten Password Time</label>
								<div class="col-md-8">
									<input type="text" name="forgotten_password_time" value="<?php echo ($this->input->post('forgotten_password_time') ? $this->input->post('forgotten_password_time') : $user['forgotten_password_time']); ?>" class="form-control" id="forgotten_password_time" />
								</div>
							</div>
							<div class="form-group">
								<label for="ip_address" class="col-md-4 control-label">Ip Address</label>
								<div class="col-md-8">
									<input type="text" name="ip_address" value="<?php echo ($this->input->post('ip_address') ? $this->input->post('ip_address') : $user['ip_address']); ?>" class="form-control" id="ip_address" />
								</div>
							</div>
							<div class="form-group">
								<label for="username" class="col-md-4 control-label">Username</label>
								<div class="col-md-8">
									<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
								</div>
							</div>
							<div class="form-group">
								<label for="salt" class="col-md-4 control-label">Salt</label>
								<div class="col-md-8">
									<input type="text" name="salt" value="<?php echo ($this->input->post('salt') ? $this->input->post('salt') : $user['salt']); ?>" class="form-control" id="salt" />
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-4 control-label">Email</label>
								<div class="col-md-8">
									<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
								</div>
							</div>
							<div class="form-group">
								<label for="activation_code" class="col-md-4 control-label">Activation Code</label>
								<div class="col-md-8">
									<input type="text" name="activation_code" value="<?php echo ($this->input->post('activation_code') ? $this->input->post('activation_code') : $user['activation_code']); ?>" class="form-control" id="activation_code" />
								</div>
							</div>
							<div class="form-group">
								<label for="remember_code" class="col-md-4 control-label">Remember Code</label>
								<div class="col-md-8">
									<input type="text" name="remember_code" value="<?php echo ($this->input->post('remember_code') ? $this->input->post('remember_code') : $user['remember_code']); ?>" class="form-control" id="remember_code" />
								</div>
							</div>
							<div class="form-group">
								<label for="created_on" class="col-md-4 control-label">Created On</label>
								<div class="col-md-8">
									<input type="text" name="created_on" value="<?php echo ($this->input->post('created_on') ? $this->input->post('created_on') : $user['created_on']); ?>" class="form-control" id="created_on" />
								</div>
							</div>
							<div class="form-group">
								<label for="last_login" class="col-md-4 control-label">Last Login</label>
								<div class="col-md-8">
									<input type="text" name="last_login" value="<?php echo ($this->input->post('last_login') ? $this->input->post('last_login') : $user['last_login']); ?>" class="form-control" id="last_login" />
								</div>
							</div>
							<div class="form-group">
								<label for="active" class="col-md-4 control-label">Active</label>
								<div class="col-md-8">
									<input type="text" name="active" value="<?php echo ($this->input->post('active') ? $this->input->post('active') : $user['active']); ?>" class="form-control" id="active" />
								</div>
							</div>
							<div class="form-group">
								<label for="first_name" class="col-md-4 control-label">First Name</label>
								<div class="col-md-8">
									<input type="text" name="first_name" value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $user['first_name']); ?>" class="form-control" id="first_name" />
								</div>
							</div>
							<div class="form-group">
								<label for="last_name" class="col-md-4 control-label">Last Name</label>
								<div class="col-md-8">
									<input type="text" name="last_name" value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $user['last_name']); ?>" class="form-control" id="last_name" />
								</div>
							</div>
							<div class="form-group">
								<label for="company" class="col-md-4 control-label">Company</label>
								<div class="col-md-8">
									<input type="text" name="company" value="<?php echo ($this->input->post('company') ? $this->input->post('company') : $user['company']); ?>" class="form-control" id="company" />
								</div>
							</div>
							<div class="form-group">
								<label for="phone" class="col-md-4 control-label">Phone</label>
								<div class="col-md-8">
									<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $user['phone']); ?>" class="form-control" id="phone" />
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