<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Materias
                <div class="pull-right">
                    <a href="<?php echo site_url('carrera_materia/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Carrera</th>
							<th>Materia</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($carrera_materias as $c){ ?>
                        <tr id="<?php echo $c['id']; ?>">
							<td><?php echo $c['id']; ?></td>
							<td><?php echo $c['carrera']; ?></td>
							<td><?php echo $c['materia']; ?></td>
							<td>
                                <a href="<?php echo site_url('carrera_materia/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('carrera_materia/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
