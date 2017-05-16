<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Listing
                <div class="pull-right">
                    <a href="<?php echo site_url('group/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Name</th>
							<th>Description</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($groups as $g){ ?>
                        <tr <?php echo $g['id']; ?>>
							<td><?php echo $g['id']; ?></td>
							<td><?php echo $g['name']; ?></td>
							<td><?php echo $g['description']; ?></td>
							<td>
                                <a href="<?php echo site_url('group/edit/'.$g['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('group/remove/'.$g['id']); ?>" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
