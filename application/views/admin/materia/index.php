<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Materias
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/materia/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Horario</th>
							<th>Descripcion</th>
							<th>Actions</th>
                        </tr>
                        <?php foreach($materias as $m){ ?>
                        <tr id="<?php echo $m['id']; ?>">
							<td><?php echo $m['id']; ?></td>
							<td><?php echo $m['nombre']; ?></td>
							<td><?php echo $m['horario']; ?></td>
							<td><?php echo $m['descripcion']; ?></td>
							<td>
                                <a href="<?php echo site_url('admin/materia/edit/'.$m['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('admin/materia/remove/'.$m['id']); ?>" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
