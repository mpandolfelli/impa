<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Listing
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/login_attempt/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Ip Address</th>
							<th>Login</th>
							<th>Time</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($login_attempts as $l){ ?>
                        <tr>
							<td><?php echo $l['id']; ?></td>
							<td><?php echo $l['ip_address']; ?></td>
							<td><?php echo $l['login']; ?></td>
							<td><?php echo $l['time']; ?></td>
							<td>
                                <a href="<?php echo site_url('admin/login_attempt/edit/'.$l['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('admin/login_attempt/remove/'.$l['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
