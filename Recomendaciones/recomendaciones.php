<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Recomendaciones - Recomendaciones de Lectura</title>
    <link rel="shortcut icon" href="boxes-6238_favicon.ico">

    <!--Fuentes-->
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    
    <!--Bootstrap version de desarrollo-->
    <link rel="stylesheet" href="bower_components/components-bootstrap/css/bootstrap.css">

    <!-- CSS Personalizado -->
    <link href="css/portal.css" rel="stylesheet" type="text/css"/>

    <!-- CSS Base Original -->
    <link href="css/complete.css" rel="stylesheet" type="text/css"/>

    <!--<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="css/iphone4.css">-->
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css">

</head>

<body class="inicio museos dibam524">
    <div id="container">
        
        <!--Menu izquierdo con submenu-->
        <?php
            include("../shared/header.php");
            include("../shared/nav.php");
        ?>


        <div id="container">
            <div class="col-lg-9">
            
            <!-- =============================================== -->
            <!-- BREADCRUMB -->
             <!-- =============================================== -->
             <div class="">
                 <p class="navegacion">
                    <a class="" href="http://www.bibliotecaspublicas.cl/sitio/">Inicio</a> /
                    <a class="" href="http://www.bibliotecaspublicas.cl/sitio/Secciones/">Menú Secciones</a> /  
                    <a class="" href="./">Recomendaciones</a>
                 </p>
             </div>

            <!-- Section Ultimos libros comite -->
            <section id="ejemplar"> 
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Recomendaciones del Ultimo Comité
                                    <a href="/PRL-V3/views/ejemplares/ejemplares.php" class="link-normal">Ver todos los libros</a>
                                </h3>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">                            
                                        </a>
                                    <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                            </div>
                                        </div>
                                        <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                    <div class="ejemplar-caption">
                                            <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                    </div>
                                </div>

                        </div>
                        
                        <div class="col-lg-12 text-center">
                             <button type="button" class="btn btn-lg btn-default">Ver más</button>
                         </div>
                </section>



            <!-- Section Libros Recomendados -->
            <section id="ejemplar">  

                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Libros Recomendados
                                <a href="/PRL-V3/views/ejemplares/ejemplares.php" class="link-normal">Ver todos los libros</a>
                            </h3>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                    <div class="ejemplar-hover">
                                        <div class="ejemplar-hover-content">
                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">                            
                                    </a>
                                <div class="ejemplar-caption">
                                    <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                    <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                    <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                        <div class="ejemplar-hover">
                                            <div class="ejemplar-hover-content">
                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                        </div>
                                    </div>
                                    <img src="img/book-portada.jpg" class="img-responsive" alt="">
                                    </a>
                                <div class="ejemplar-caption">
                                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-12 text-center">
                            
                            <button type="button" class="btn btn-lg btn-default">Ver más</button>
                        
                        </div>
            </section>
                
                
            <section id="comites">
                <h3>Recomendaciones del Último Comité <a href="#" class="link-normal">ver todas las recomendaciones</a></h3>
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
                            
                     </div>
                    <!--fin de la fila -->
               </section>

             </div><!--contenedor de 9 columnas-->
         </div>



        <!--************  Footer   ***********-->
        <?php
            include("shared/footer.php")
        ?>
        <!--*********************************-->


    <!--  Modal -->
    <!--  Modal Libro -->
    <div class="modal fade" id="ejemplarModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Título del libro en no más de uno o dos reglones, si no cabe se…</h4>
                </div>
                <div class="modal-body row">
                    <div class="col-lg-4 text-center">
                        <img class="img-responsive img-centered" src="img/book-portada.jpg" alt="" width="200px">
                        <p class="item-intro text-muted"><strong>De:</strong> Nombre_del_autor uno_a__dos_reglones_m-aximo.</p>
                    </div>
                           
                    <div class="col-lg-8">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                        <ul class="list-inline">
                            <li><strong>Publicado:</strong> Julio 2018</li><br/>
                            <li><strong>ISBN:</strong> 1-4028-9462-7</li><br/>
                            <li><strong>Materias: </strong> Astronomía</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <a href="views/ejemplares/ejem_description.php" class="btn btn-default">                    
                          <i class="fa fa-plus"></i> Más información
                      </a> 
                </div>
           </div>
        </div>
     </div>


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
                    <div class="col-lg-8 text-left">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>     
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <a href="https://www.google.cl/?gws_rd=ssl" class="btn btn-default">                       
                            <i class="fa fa-plus"></i> Más información
                        </a> 
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>

    <script type="text/javasript"  src="bower_components/components-bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="bower_components/components-bootstrap/js/modal.js"></script>


    <script type="text/javascript" src="js/channels-524_js_main.js"></script>
    <script type="text/javascript" src="js/channels-524_js_jquery_1_9_1.js"></script>
    <script type="text/javascript" src="js/channels-524_js_jqueryui_1_10_3.js"></script>
    <script type="text/javascript" src="js/channels-524_js_jquerymigration_1_2_1.js"></script>
    <script type="text/javascript" src="js/boxes-7976_js_file.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyClV8QvrJtON__TUj5W7Q8mWCM6BKglZ4M"></script>
   
   <script type="text/javascript">
            $(document).ready(function () 
            {
                ntg_Google_map_init();
            });
    </script>

    <!-- slider para imagenes en header-->
    <script type="text/javascript" src="js/header-carrousel.js"></script>

    <script type="text/javascript" src="js/jquery.carouFredSel-5.6.2.js"></script>
</body>

</html>
