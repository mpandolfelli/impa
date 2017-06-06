<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Listing
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/imagene/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Noticia Id</th>
							<th>Nombre</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($imagenes as $i){ ?>
                        <tr>
							<td><?php echo $i['id']; ?></td>
							<td><?php echo $i['noticia_id']; ?></td>
							<td><?php echo $i['nombre']; ?></td>
							<td>
                                <a href="<?php echo site_url('admin/imagene/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('admin/imagene/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
