<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Listing
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/users_group/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>User</th>
							<th>Group</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($users_groups as $u){ ?>
                        <tr id="<?php echo $u['id']; ?>">
							<td><?php echo $u['id']; ?></td>
							<td><?php echo $u['usuario']; ?></td>
							<td><?php echo $u['sector']; ?></td>
							<td>
                                <a href="<?php echo site_url('admin/users_group/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('admin/users_group/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
