<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <!-- Modo compatibilidad -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portal de Recomendaciones de Lectura">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Recomendaciones - Recomendaciones de Lectura</title>

    <!--<link rel="shortcut icon" href="boxes-6238_favicon.ico">-->
    <link rel="shortcut icon" href="../../resources/img/PRL-logotipo-color.png">

    <!--Fuentes-->
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    

    <!--Normalize -->
    <link rel="stylesheet" href="../../resources/css/normalize.css">

    <!--Bootstrap version de desarrollo-->
    <link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap.css">

    <!-- CSS Personalizado -->
    <link href="../../resources/css/portal.css" rel="stylesheet" type="text/css"/>

    <!-- CSS Base Original -->
    <link href="../../resources/css/complete.css" rel="stylesheet" type="text/css"/>

    <!--ICON-->
    <link href="../../resources/css/fontawesome.min.css" rel="stylesheet" type="text/css">

    <!--Animated-->
    <link href="../../resources/css/animate.css" rel="stylesheet" type="text/css">

    <!--Selected-->
    <link rel="stylesheet" href="../../resources/css/bootstrap-select.min.css" type="text/css">
</head>

<body class="inicio museos dibam524">
    <div id="container">
        
        <!--Menu izquierdo con submenu-->
        <?php
            include("./../../shared/header.php");
            include("./../../shared/nav.php");
        ?>


        <div id="container">
            <div class="col-lg-9 col-md-9">
            <nav>            
                <div class="navegacion">
                    <p class="navegacion"><a class="channellink" href="./../../index.php">Inicio</a> / 
                    <a href="#">Otros Comités</a>
                    </p>
                </div>
            </nav>

        <main>
            <article class="animated fadeIn">

                <header class="text-left">
                    <h3>Otros Comités</h3>
                </header>

                <section id="comites">
                        <!-- inicio fila ** recomendaciones-->
                        <div class="row"> 
                        <!--***************************************************************-->
                        <div id="recomendaciones-panel">        
                        <!--Recomendaciones Panel contenido-->                
                            <div class="col-lg-12 recomendaciones-item">
                                <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                            </div>
                                            <h4>Título del comite de uno hasta tres </h4>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</small>
                                                            
                                            <!--Contenido Footer del panel-->
                                            <div class="footer-description">
                                                <label class="label label-danger">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-users fa-2x pull-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--***************************************************************-->


                        <!--***************************************************************-->
                        <div id="recomendaciones-panel">        
                        <!--Recomendaciones Panel contenido-->                
                            <div class="col-lg-12 recomendaciones-item">
                                <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                            </div>
                                            <h4>Título del comite de uno hasta tres </h4>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</small>
                                                            
                                            <!--Contenido Footer del panel-->
                                            <div class="footer-description">
                                                <label class="label label-danger">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-users fa-2x pull-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--***************************************************************-->

                        <!--***************************************************************-->
                        <div id="recomendaciones-panel">        
                        <!--Recomendaciones Panel contenido-->                
                            <div class="col-lg-12 recomendaciones-item">
                                <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                            </div>
                                            <h4>Título del comite de uno hasta tres </h4>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</small>
                                                            
                                            <!--Contenido Footer del panel-->
                                            <div class="footer-description">
                                                <label class="label label-danger">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-users fa-2x pull-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--***************************************************************-->
                                
                        </div>
                        <!--fin de la fila -->
                </section>
                </div><!--contenedor de 9 columnas-->
            </div>

            </article>
        </main>
        <!--************  Footer   ***********-->
        <?php
            include("./../../shared/footer.php")
        ?>
        <!--*********************************-->

    <!--Modal Comite-->
    <div class="modal fade" id="comiteModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Título_del_comité_en_un_reglón</h4>
                </div>
                <div class="modal-body row">
                     <!--  Detalle -->
                     <div class="col-lg-4">
                         <img class="img-responsive img-centered" src="https://dummyimage.com/300x400/575757/e6e6ed.jpg" alt="" width="200px">
                    </div>
                    <div class="col-lg-8 text-justify">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>     
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <a href="https://www.google.cl/?gws_rd=ssl" target="_blank" class="btn btn-default">                       
                            <i class="fa fa-plus"></i> Más información
                        </a> 
                </div>
            </div>
        </div>
    </div>



        <script src="../../resources/jquery/jquery.min.js"></script>
        <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>   

        <script src="../../resources/js/bootstrap-select.min.js"></script>   
        
        <!--Header galery-->
        <script type="text/javascript" src="../../resources/js/channels-524_js_jqueryui_1_10_3.js"></script>

        <!-- Footer map container -->
        <script type="text/javascript" src="../../resources/js/boxes-7976_js_file.js"></script>

        <!-- slider para imagenes en header-->
        <script type="text/javascript" src="../../resources/js/header-carrousel.js"></script>
        <script type="text/javascript" src="../../resources/js/jquery.carouFredSel-5.6.2.js"></script>
        
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyClV8QvrJtON__TUj5W7Q8mWCM6BKglZ4M"></script>
    
        <script type="text/javascript">
                $(document).ready(function () 
                {
                    ntg_Google_map_init();
                });
        </script>
</body>

</html>
