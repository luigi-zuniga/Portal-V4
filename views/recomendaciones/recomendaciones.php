<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Recomendaciones - Recomendaciones de Lectura</title>
    <link rel="shortcut icon" href="/PRL/resources/img/PRL-logotipo-color.png">

    <!--Fuentes-->
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    
    <!--Bootstrap version de desarrollo-->
    <link rel="stylesheet" href="./../../bower_components/components-bootstrap/css/bootstrap.css">

    <!-- CSS Personalizado -->
    <link href="./../../resources/css/portal.css" rel="stylesheet" type="text/css"/>

    <!-- CSS Base Original -->
    <link href="./../../resources/css/complete.css" rel="stylesheet" type="text/css"/>

    <!--<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="css/iphone4.css">-->
    <link href="./../../resources/css/fontawesome.min.css" rel="stylesheet" type="text/css">

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
            <ol class="breadcrumb navegacion">
                <li><a href="./../../index.php">Inicio</a></li>
                <li><a href="#">Recomendaciones</a></li>
                <li class="active"><a href="./views/recomendaciones/recomendaciones.php">Set Recomendaciones</a></li>
            </ol>
            </nav>


        <main>
            <article>
                <header class="text-left">
                    <h3>Recomendaciones</h3>
                </header>


                <section class="pull-right">  
                    <div id="busquedaFiltro">
                        <label for="input">Orden:</label>
                        <select name="" id="input">
                            <option value="1">Más nuevos primero</option>
                            <option value="2">Más antiguos primero</option>
                        </select>
                    </div>   
                </section>

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
                                            <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</small>
                                                            
                                            <!--Contenido Footer del panel-->
                                            <div class="footer-description">
                                                <label class="label label-default">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-book fa-2x pull-right"></i>
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
                                            <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</small>
                                                            
                                            <!--Contenido Footer del panel-->
                                            <div class="footer-description">
                                                <label class="label label-default">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-book fa-2x pull-right"></i>
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
                                            <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</small>
                                                            
                                            <!--Contenido Footer del panel-->
                                            <div class="footer-description">
                                                <label class="label label-default">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-book fa-2x pull-right"></i>
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



    <script type="text/javascript" src="/PRL/bower_components/jquery/dist/jquery.min.js"></script>

    <script type="text/javasript"  src="/PRL/bower_components/components-bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="/PRL/bower_components/components-bootstrap/js/modal.js"></script>


    <script type="text/javascript" src="/PRL/resources/js/channels-524_js_main.js"></script>
    <script type="text/javascript" src="/PRL/resources/js/channels-524_js_jquery_1_9_1.js"></script>
    <script type="text/javascript" src="/PRL/resources/js/channels-524_js_jqueryui_1_10_3.js"></script>
    <script type="text/javascript" src="/PRL/resources/js/channels-524_js_jquerymigration_1_2_1.js"></script>
    <script type="text/javascript" src="/PRL/resources/js/boxes-7976_js_file.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyClV8QvrJtON__TUj5W7Q8mWCM6BKglZ4M"></script>
   
    <script type="text/javascript">
                $(document).ready
                (
                    function() 
                    {
                        ntg_Google_map_init();
                    }
                );
    </script>
          
    <!-- slider para imagenes en header-->
    <script type="text/javascript" src="/PRL/resources/js/header-carrousel.js"></script>

    <script type="text/javascript" src="/PRL/resources/js/jquery.carouFredSel-5.6.2.js"></script>
</body>

</html>
