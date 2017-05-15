<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Usuarios
                <div class="pull-right">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>>
							<th>Actions</th>
                        </tr>
                        <?php foreach($users as $u){ ?>
                        <tr>
							<td><?php echo $u['id']; ?></td>
							<td><?php echo $u['first_name']; ?></td>
							<td><?php echo $u['last_name']; ?></td>
							<td><?php echo $u['email']; ?></td>
							<td>
                                <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
