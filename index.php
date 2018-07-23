<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Recomendaciones de Lectura - Sistema Nacional de Bibliotecas Públicas</title>
    <link rel="shortcut icon" href="boxes-6238_favicon.ico">

    <!--Fuentes-->
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    

    <link rel="stylesheet" href="bower_components/components-bootstrap/css/bootstrap.css">


    <!-- CSS Base -->
    <link href="css/portal.css" rel="stylesheet" type="text/css"/>
    <link href="css/complete.css" rel="stylesheet" type="text/css"/>



    <!--<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="css/iphone4.css">-->
    
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css">
</head>

<body class="inicio museos dibam524">
    <div id="container">



        <!--Menu izquierdo con submenu-->
        <?php
            include("shared/header.php");
            include("shared/nav.php");
        ?>


        <div id="container">
            <div class="col-lg-9">

                <!-- =============================================== -->
                <!-- BREADCRUMB -->
                <!-- =============================================== -->
               <!-- <div class="navegacion" id="barra_navegacion_i__wd_pa_barraPosicion_conClasificando_1">
                    <p class="navegacion">
                        <a class="channellink" href="http://www.bibliotecaspublicas.cl/sitio/">Inicio</a> /
                        <a class="pnamelink pnid-619 cid-524" href="http://www.bibliotecaspublicas.cl/sitio/Secciones/">Menú Secciones</a> /
                        <a class="current portadilla w3:propertyvalue pvid-40565 cid-524" href="./">Recomendaciones</a>
                    </p>
                </div>-->

                <!-- =============================================== -->
                <!-- CONTENIDO -->
                <!-- =============================================== -->

                <h4 class="ntg-titulo-caja">Recomendaciones del Último Comité</h4>

            <div class="row"> <!--Paneles Recomendaciones-->
                <!--fila-->
                <div id="recomendaciones-panel">
                    <!--Recomendaciones Panel contenido-->
                    <div class="col-lg-12 recomendaciones-item">
                        <a href="views/recomendaciones/recom_set.php" class="recomendaciones-link">
                            <div class="panel">
                                <div class="panel-body">
                                        <div class="recomendaciones-hover">
                                                <div class="recomendaciones-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                               </div>
                                           </div>
                                    <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                        inventore harum ex magni, dicta impedit.</small>
                                    <div class="container">
                                        <div class="row">
                                            <div class="footer-description">
                                                <label class="label label-default">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-book fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end Recomendaciones Panel contendo-->


                    <!--Recomendaciones Panel contenido-->
                    <div class="col-lg-12 recomendaciones-item">
                            <a href="views/recomendaciones/recom_set.php" class="recomendaciones-link">
                                <div class="panel">
                                    <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                   </div>
                                               </div>
                                        <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                            inventore harum ex magni, dicta impedit.</small>

                                                <div class="footer-description">
                                                    <label class="label label-default">Año: 2015</label>
                                                    <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                    <i class="fa fa-book fa-2x"></i>
                                                </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--end Recomendaciones Panel contendo-->
                </div>
                <!--end fila-->
            </div><!--end Panel Recomendaciones-->



 <!-- Section Libros Recomendados -->
 <section id="ejemplar" class="bg-light-gray">  
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                     <h4 class="section-heading">Últimos Libros Recomendados
                        <a href="/PRL-V3/views/ejemplares/ejemplares.php" class="link-normal">Ver todos los libros</a>
                    </h4>
                </div>
            </div>

            <div class="row">

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                         <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                              <div class="ejemplar-hover">
                                 <div class="ejemplar-hover-content">
                                     <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                </div>
                            </div>
                            <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                            <img src="img/book-portada.jpg" class="img-responsive" alt="">
                            <label class="label label-default portafolio-publicacion">Año: 2015</label>
                            </a>
                        <div class="ejemplar-caption">
                             <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                             <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                        </div>
                    </div>
















                </div>
    </section>


        <!-- Section Recomendaciones -->
        <section id="recomendaciones">
                <div class="container">
                    <!--Header Comites-->
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <h2 class="section-heading">Otros Comités
                                <a href="views/otrosComites/otros_comites.php" class="link-normal">Ver todos los otros comités</a>
                            </h2>
                        </div>

                        <div id="recomendaciones-panel">
                                <!--Recomendaciones Panel contenido-->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                        <div class="panel">
                                            <div class="panel-body">
                                                    <div class="recomendaciones-hover">
                                                            <div class="recomendaciones-hover-content">
                                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                           </div>
                                                       </div>
                                                <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                    inventore harum ex magni, dicta impedit.</small>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="footer-description">
                                                            <label class="label label-default">Año: 2015</label>
                                                            <i class="fa fa-users fa-2x"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">  
                                            <div class="panel">
                                                <div class="panel-body">
                                                        <div class="recomendaciones-hover">
                                                                <div class="recomendaciones-hover-content">
                                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                               </div>
                                                           </div>
                                                    <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                        inventore harum ex magni, dicta impedit.</small>
                                                    <div class="container">
                                                        <div class="row">    
                                                            <div class="footer-description">
                                                                <label class="label label-default">Año: 2015</label>
                                                                <i class="fa fa-users fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">  
                                            <div class="panel">
                                                <div class="panel-body">
                                                        <div class="recomendaciones-hover">
                                                                <div class="recomendaciones-hover-content">
                                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                               </div>
                                                           </div>
                                                    <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                        inventore harum ex magni, dicta impedit.</small>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="footer-description">
                                                                <label class="label label-default">Año: 2015</label>
                                                                <i class="fa fa-users fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">  
                                            <div class="panel">
                                                <div class="panel-body">
                                                        <div class="recomendaciones-hover">
                                                                <div class="recomendaciones-hover-content">
                                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                               </div>
                                                           </div>
                                                    <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                        inventore harum ex magni, dicta impedit.</small>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="footer-description">
                                                                <label class="label label-default">Año: 2015</label>
                                                                <i class="fa fa-users fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                    </div>
                    <!-- end Header Comites-->
    
                </div>
            </section>



    <!--  Modal -->
    <!--  Modal 1 -->
    <div class="ejemplar-modal modal fade" id="ejemplarModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!--  Detalle -->
                                <h4>Título del libro en no más de uno o dos reglones, si no cabe se…</h4>
                                <p class="item-intro text-muted"><strong>De:</strong> Nombre_del_autor uno_a__dos_reglones_m-aximo.</p>
                                <img class="img-responsive img-centered" src="resources/img/book-portada.jpg" alt="" width="200px">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                                <ul class="list-inline">
                                    <li><strong>Publicado:</strong> Julio 2018</li>
                                    <li><strong>ISBN:</strong> 1-4028-9462-7</li>
                                    <li><strong>Materias: </strong> Astronomía</li>
                                </ul>
                                <a href="views/ejemplares/ejem_description.php" class="btn btn-default btn-block">
                                <i class="fa fa-plus"></i> Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Modal Comite-->
    <div class="ejemplar-modal modal fade" id="comiteModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!--  Detalle -->
                                <h4>Título_del_comité_en_un_reglón.</h4>
                                <img class="img-responsive img-centered" src="https://dummyimage.com/300x400/575757/e6e6ed.jpg" alt="" width="200px">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                                <a href="https://www.google.cl/?gws_rd=ssl" class="btn btn-default btn-block">
                                <i class="fa fa-plus"></i> Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



            </div>
                    <span class="clearfix"></span>
                 </div>

        <?php
            include("shared/footer.php")
        ?>


        
    <script type="text/javascript" src="js/channels-524_js_main.js"></script>
    <script type="text/javascript" src="js/channels-524_js_jquery_1_9_1.js"></script>
    <script type="text/javascript" src="js/channels-524_js_jqueryui_1_10_3.js"></script>
    <script type="text/javascript" src="js/channels-524_js_jquerymigration_1_2_1.js"></script>
    <script type="text/javascript" src="js/boxes-7976_js_file.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyClV8QvrJtON__TUj5W7Q8mWCM6BKglZ4M"></script>
   
   <script type="text/javascript">
            $(document).ready(function () {
                ntg_Google_map_init();
            });
    </script>

    <!-- slider para imagenes en header-->
    <script type="text/javascript" src="js/header-carrousel.js"></script>

    <script type="text/javascript" src="js/jquery.carouFredSel-5.6.2.js"></script>
</body>

</html>
