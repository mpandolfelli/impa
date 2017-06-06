<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
						<?php echo form_open('',array("class"=>"form-horizontal")); ?>

							<div class="form-group">
									<label for="user_id" class="col-md-4 control-label">User Id</label>
									<div class="col-md-8">
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
									<label for="group_id" class="col-md-4 control-label">Group Id</label>
									<div class="col-md-8">
										<select name="group_id" class="form-control">
											<option value="">select group</option>
											<?php 
											foreach($all_groups as $group)
											{
												$selected = ($group['id'] == $this->input->post('group_id')) ? ' selected="selected"' : "";

												echo '<option value="'.$group['id'].'" '.$selected.'>'.$group['name'].'</option>';
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