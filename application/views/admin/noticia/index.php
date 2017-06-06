<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Noticías 
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/noticia/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
                <br clear="all">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
							<th>ID</th>
							<th>Categoria</th>
							<th>User</th>
							<th>Titulo</th>
							<th>Fecha</th>
							<th>Copete</th>
							
							<th>Actions</th>
                        </tr>
                        <?php foreach($noticias as $n){ ?>
                        <tr id="<?php echo $n['id']; ?>">
							<td><?php echo $n['id']; ?></td>
							<td><?php echo $n['categoria']; ?></td>
							<td><?php echo $n['usuario']; ?></td>
							<td><?php echo $n['titulo']; ?></td>
							<td><?php echo $n['fecha']; ?></td>
							<td><?php echo $n['copete']; ?></td>
							
							<td>
                                <a href="<?php echo site_url('admin/noticia/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                                <a href="<?php echo site_url('admin/noticia/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs delete" data-id="<?php echo $n['id'];?>"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
