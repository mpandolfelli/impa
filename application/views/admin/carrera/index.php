<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Carreras
                <div class="pull-right">
                    <a href="<?php echo site_url('carrera/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($carreras as $c){ ?>
                        <tr id="<?php echo $c['id']; ?>">
							<td><?php echo $c['id']; ?></td>
							<td><?php echo $c['nombre']; ?></td>
							<td>
                                <a href="<?php echo site_url('carrera/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('carrera/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
