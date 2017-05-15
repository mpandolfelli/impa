 <!-- Banner -->
    <div class="container-flud banner-principal">
      
    </div>
    <!-- / Banner -->

    <!-- Contenido centrado -->
    <div class="container section">
        <div class="row separador">
          <div class="col-md-6">
            <div class="box-principal box-big">
              <div class="box-img-principal-1 box-img"></div>
              <div class="box-principal-texto">
                <h2>Los profesorados de IMPA</h2>
                <p>En este espacio se pondrán las carreras on and specialising in the
  study of creative, cultural and social subjects. Degree programmes,
  student life and departmental research .is a public university...</p>
           <hr>
              </div>
             
              <div class="box-principal-mas">Ver mas..</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                 <div class="box-principal box-small">
                    <div class="box-img-principal-2 box-img"></div>
                    <div class="box-principal-texto">
                      <p>Exposición de los Es esa nuestra filosofía trabajos 2017 1 — 30.12.2017 Desde las 14:00</p>
                      <hr>
                    </div>
                   
                    <div class="box-principal-mas">Ver mas..</div>
                  </div>
              </div>
               <div class="col-md-6">
                 <div class="box-principal box-rojo box-small">
                    <div class="box-principal-texto">
                      <h4>Bienvenidos a</h4>
                      <h3>La universidad
de los trabajadores</h3>
<p>El espacio nació desde
la lucha el trabajo colectivo.
Exposición de los Es esa nuestra filosofía</p>
                      <hr>
                    </div>
                   
                    <div class="box-principal-mas">Ver mas..</div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                 <div class="box-principal box-separador box-small">
                    <div class="box-img-principal-3 box-img"></div>
                    
                   
                   
                  </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="separador"></div>

        <!-- Buscador -->
        <div class="col-md-12 buscador">
            <h2>¿Qué te gustaría estudiar?</h2>
            <div class="row padding separador">
              <div class="col-md-11 col-xs-12 col-sm-10 buscador-input" contenteditable="true">Buscá el curso</div>
              <div class="col-md-1 col-sx-12 col-sm-2 buscador-btn"><span class="glyphicon glyphicon-search"></span></div>
            </div>  
        </div>
        <!-- / Buscador -->

        <div class="row separador">
          <div class="col-md-6">
            <div class="box-principal box-big">
              <div class="box-img-principal-1 box-img"></div>
              <div class="box-principal-texto">
                <h2>Los profesorados de IMPA</h2>
                <p>En este espacio se pondrán las carreras on and specialising in the
  study of creative, cultural and social subjects. Degree programmes,
  student life and departmental research .is a public university...</p>
           <hr>
              </div>
             
              <div class="box-principal-mas">Ver mas..</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                 <div class="box-principal box-small">
                    <div class="box-img-principal-2 box-img"></div>
                    <div class="box-principal-texto">
                      <p>Exposición de los Es esa nuestra filosofía trabajos 2017 1 — 30.12.2017 Desde las 14:00</p>
                      <hr>
                    </div>
                   
                    <div class="box-principal-mas">Ver mas..</div>
                  </div>
              </div>
               <div class="col-md-6">
                 <div class="box-principal box-rojo box-small">
                    <div class="box-principal-texto">
                      <h4>Bienvenidos a</h4>
                      <h3>La universidad
de los trabajadores</h3>
<p>El espacio nació desde
la lucha el trabajo colectivo.
Exposición de los Es esa nuestra filosofía</p>
                      <hr>
                    </div>
                   
                    <div class="box-principal-mas">Ver mas..</div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                 <div class="box-principal box-separador box-small">
                    <div class="box-img-principal-3 box-img"></div>
                    
                   
                   
                  </div>
              </div>
              
            </div>
          </div>
        </div>

        

        
    </div>
    <div class="container-fluid bg-blanco section">
      <div class="container">
        <div class="row separador">
          <h2 class="text-center title">Novedades</h2>

          <?foreach ($noticias as $noticia) { ?>
            <div class="col-md-3 col-xs-12 col-sm-6 box-novedades">
              <div class="box-novedades-img"><img class="img-responsive" src="http://placehold.it/350x150" /></div>
              <h4><?=$noticia['titulo'];?></h4>
              <p><?=$noticia['copete'];?></p>
              <p><strong><?=$noticia['timestamp'];?></strong></p>
              <a href="" class="ver-mas">Ver maas...</a>
            </div>
          <? } ?>
        
          

        </div>
      </div>
    </div>


    <div class="container-fluid bg-gris section">
      <div class="container">
        <div class="row separador">
          <h2 class="text-center title">Eventos</h2>
          <div class="col-md-3 col-xs-12 col-sm-6 box-novedades">
            <div class="box-novedades-img"><img class="img-responsive" src="http://placehold.it/350x150" /></div>
            <h4>Titulo</h4>
            <p>Lorem ipsum lorem ipsum lorem ipsum. lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            <p><strong>Fecha</strong></p>
            <a href="" class="ver-mas">Ver maas...</a>
          </div>
           <div class="col-md-3 col-xs-12 col-sm-6 box-novedades">
            <div class="box-novedades-img"><img class="img-responsive" src="http://placehold.it/350x150" /></div>
            <h4>Titulo</h4>
            <p>Lorem ipsum lorem ipsum lorem ipsum. lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            <p><strong>Fecha</strong></p>
            <a href="" class="ver-mas">Ver maas...</a>
          </div>
           <div class="col-md-3 col-xs-12 col-sm-6 box-novedades">
            <div class="box-novedades-img"><img class="img-responsive" src="http://placehold.it/350x150" /></div>
            <h4>Titulo</h4>
            <p>Lorem ipsum lorem ipsum lorem ipsum. lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            <p><strong>Fecha</strong></p>
            <a href="" class="ver-mas">Ver maas...</a>
          </div>
           <div class="col-md-3 col-xs-12 col-sm-6 box-novedades">
            <div class="box-novedades-img"><img class="img-responsive" src="http://placehold.it/350x150" /></div>
            <h4>Titulo</h4>
            <p>Lorem ipsum lorem ipsum lorem ipsum. lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            <p><strong>Fecha</strong></p>
            <a href="" class="ver-mas">Ver maas...</a>
          </div>

        </div>
      </div>
    </div>