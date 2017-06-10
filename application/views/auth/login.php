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
 
    <!-- Contenido centrado -->
    <div class="container section text-center">
        <h2 style="margin-top:100px;">Acceso a Docentes y estudiantes</h2>
        <div id="infoMessage"><?php echo $message;?></div>
        <div class="login">
          <img src="<?php echo site_url('resources/images/logo.jpg');?>" width="200" align="center">
          <?php echo form_open("auth/login",array('class'=>'separador'));?>
            <div class="form-group"> 
              <?php echo form_input($identity);?>
            </div>
            <div class="form-group">
              <?php echo form_input($password);?>
            </div>
            <div class="form-group">
              <a href="" class="btn btn-app">Ingresar</a>
            </div>
            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
          <?php echo form_close();?>
        </div>
        
    </div>
   


   


   
    <!-- / Contenido centrado -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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