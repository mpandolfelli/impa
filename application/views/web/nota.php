<div class="container-fluid bg-gris section nota">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bg-blanco">
       
       
        <div class="nota-contenido">
         <h2><?=$noticia->titulo ?></h2>

        <div class="nota-imagen">
        <img src="http://placehold.it/980x300" class="img-responsive" /></div>
        <div style="clear:both">
        <?=$noticia->descripcion ?>
        </div>
        <div class="nota-categorias">
            <span class="label label-default"><?=$noticia->categoria;?></span>
        </div>
        <div class="nota-data"> Publicado por: <?=$noticia->user_id?></div>
        </div>
        
       
      </div>
     
    </div>
    

  </div>
</div>
    

   