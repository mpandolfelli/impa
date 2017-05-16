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
    <link href="<?php echo site_url('resources/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('resources/css/jquery-confirm.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="bg-gris">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
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
                    <li><a href="javascript:void(0);" class="view-navigation"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>

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
                            <li>
                                <a href="<?php echo site_url('carrera_materia/index');?>"><i class="fa fa-table fa-fw"></i> Carrera Materia</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('carrera/index');?>"><i class="fa fa-table fa-fw"></i> Carrera</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('categoria/index');?>"><i class="fa fa-table fa-fw"></i> Categoria</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('login_attempt/index');?>"><i class="fa fa-table fa-fw"></i> Login Attempt</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('materiale/index');?>"><i class="fa fa-table fa-fw"></i> Materiale</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('materia/index');?>"><i class="fa fa-table fa-fw"></i> Materia</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('noticia/index');?>"><i class="fa fa-table fa-fw"></i> Noticia</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('user/index');?>"><i class="fa fa-table fa-fw"></i> User</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('group/index');?>"><i class="fa fa-table fa-fw"></i> Group</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('users_group/index');?>"><i class="fa fa-table fa-fw"></i> Users Group</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 app-nav">

                <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="<?php echo site_url('carrera_materia/index');?>"><i class="fa fa-table fa-fw"></i> Carrera Materia</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('carrera/index');?>"><i class="fa fa-table fa-fw"></i> Carrera</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('categoria/index');?>"><i class="fa fa-table fa-fw"></i> Categoria</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('materiale/index');?>"><i class="fa fa-table fa-fw"></i> Materiale</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('materia/index');?>"><i class="fa fa-table fa-fw"></i> Materia</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('noticia/index');?>"><i class="fa fa-table fa-fw"></i> Noticia</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('user/index');?>"><i class="fa fa-table fa-fw"></i> User</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('group/index');?>"><i class="fa fa-table fa-fw"></i> Group</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('users_group/index');?>"><i class="fa fa-table fa-fw"></i> Users Group</a>
                        </li>
                    </ul>
                </ul>

                <div class="user">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <div class="username">Nombre de usuario</div>
                    <a class="btn-app">Editar perfil</a>
                </div>

            </div>
            <div class="col-md-10" id="materias">
                <div class="panel panel-default">
                    <div id="page-wrapper">
                        <div class="row">
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <?php                
                        if(isset($_view) && $_view)
                            $this->load->view("admin/".$_view);
                        ?>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo site_url('resources/js/jquery.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('resources/js/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('resources/js/sb-admin-2.js');?>"></script>
    <script src="<?php echo site_url('resources/js/jquery-confirm.js');?>"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script type="text/javascript">
        var base_url = '<?php echo base_url();?>';
        tinymce.init({
              force_br_newlines : false,
              force_p_newlines : false,
              forced_root_block : '',
              relative_urls: false,
            selector: '.wishiwi',
            height: 200,
            plugins: [
                    
                    "textcolor template colorpicker lists link preview anchor",
                    "code",
                    "insertdatetime paste"
                ],
              templates: "templates/snippets/snippets.json",
              toolbar: "undo redo | template | forecolor backcolor |  bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link",
            imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: ['//www.tinymce.com/css/codepen.min.css']
        });
    $(document).ready(function(){

        var height = $(window).height();
        $('.extra-navigation').height(height);
       // $('.app-nav').height(height - 90);

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

        $(".delete").click(function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            var id = $(this).data("id");
            $.confirm({
                title: 'Confirm!',
                content: 'Desea eliminar este elemento ?',
                buttons: {
                    Si: function () {
                        $.get(url, function() {
                            $("#"+id).remove().fadeOut();
                        });
                    },          
                    No: function () {
                       
                    },
                }
            });
        })


    });
    </script>
</body>
</html>