<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ISFD</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('resources/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('resources/css/impa.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('resources/css/app.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="<?php echo site_url('resources/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-gris">
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo site_url('resources/images/logo.jpg');?>"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
       
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Docentes y estudiantes</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
          <li><a href="javascript:void(0);" class="view-navigation"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
         
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="extra-navigation">
    <h2>Información sobre</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              La fabrica
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <ul>
              <li><a href="">Historia</a></li>
              <li><a href="">Filosofía</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Ciudad cultural
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
             <ul>
              <li><a href="">Centro cultural</a></li>
              <li><a href="">Museo</a></li>
              <li><a href="">Radio semilla</a></li>
              <li><a href="">Barricada</a></li>
              <li><a href="">Diseño</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
             Polo educativo
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
           <ul>
              <li><a href="">UT-IMPA</a></li>
              <li><a href="">Calendario</a></li>
              <li><a href="">Publicaciones</a></li>
              <li><a href="">Novedades</a></li>
              <li><a href="">Institucional</a></li>
              <li><a href="">Investigacion</a></li>
              <li><a href="">Bachillerato</a></li>
              <li><a href="">Profesorados</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
   <?php                
      if(isset($_view) && $_view)
          $this->load->view($_view);
      ?>


    <div class="container-fluid bg-azul section footer">
      <div class="container">
        <div class="row separador">
          
          <div class="col-md-3 col-xs-6 col-sm-4">
            <ul>
              <li><a href="">Nosotros</a></li>
              <li><a href="">Contacto</a></li>
              <li><a href="">Privacidad</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-xs-6 col-sm-4">
            <ul>
              <li><a href="">Alumnos y docentes</a></li>
              <li><a href="">Carreras</a></li>
              <li><a href="">Cursos</a></li>
            </ul> 
          </div>
          <div class="col-md-3 col-xs-6 col-sm-4">
            <ul>
              <li>Querandíes 4290</li>
              <li>CABA</li>
              <li>Tel: 44444 44444</li>
            </ul>  
            
          </div>
          <div class="col-md-3 social col-xs-6 col-sm-4">
              <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            
          </div>

        </div>
      </div>
    </div>
    <!-- / Contenido centrado -->


   <script src="<?php echo site_url('resources/js/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>

    <script type="text/javascript">
     
      $(document).ready(function(){
        var height = $(window).height();
        $('.extra-navigation').height(height);

        var opened = false;

        $('.view-navigation').click(function(){
          if(!opened){
            $('.extra-navigation').fadeIn();
            opened = true;
          }else{
            $('.extra-navigation').fadeOut();
            opened = false;
          }
          
        });
      });
    </script>
  </body>
</html>