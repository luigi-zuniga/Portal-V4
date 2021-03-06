<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <!-- Modo compatibilidad -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portal de Recomendaciones de Lectura">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Recomendaciones de Lectura - Sistema Nacional de Bibliotecas Públicas</title>

    <!--<link rel="shortcut icon" href="boxes-6238_favicon.ico">-->
    <link rel="shortcut icon" href="resources/img/PRL-logotipo-color.png">

    <!--Fuentes-->
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    

    <!--Normalize -->
    <link rel="stylesheet" href="resources/css/normalize.css">

    <!--Bootstrap version de desarrollo-->
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.css">

    <!-- CSS Personalizado -->
    <link href="resources/css/portal.css" rel="stylesheet" type="text/css"/>

    <!-- CSS Base Original -->
    <link href="resources/css/complete.css" rel="stylesheet" type="text/css"/>

    <!--ICON-->
    <link href="resources/css/fontawesome.min.css" rel="stylesheet" type="text/css">

    <!--Animated-->
    <link href="resources/css/animate.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="inicio museos dibam524">
    <div id="container">
        
        <!--Menu izquierdo con submenu-->
        <?php
            include("shared/header.php");
            include("shared/nav.php");
        ?>

       
        <div id="container">
            <div class="col-lg-9 col-md-9">
            
                <!-- =============================================== -->
                <!-- BREADCRUMB -->
                <!-- =============================================== -->

                <div class="navegacion">
                <p class="navegacion"><a class="channellink" href="./index.php">Inicio</a></p>
                </div>


                <main>


                 <!-- =============================================== -->
                 <!-- Recomendaciones de Ultimo Comite -->
                 <!-- =============================================== -->
                <article class="animated fadeIn">
                    <section id="ejemplar">  
                            <div class="row">
                                <div class="col-lg-12">
                                    <header class="text-left">
                                        <h3>Recomendaciones del Último Comité
                                          <a href="./views/recomendaciones/recomendaciones_set.php" class="link-normal">Ver todo</a>
                                        </h3>
                                        <p class="hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur explicabo laborum aperiam quod tempora necessitatibus ab nesciunt, velit et facilis at illo a corporis vitae voluptates? Nulla atque suscipit necessitatibus.</p>
                                    </header>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                        <h6>Título del libro en no más de uno o dos reglones</h6>
                                        <a href="#ejemplarModalUltimoComite1" class="ejemplar-link" data-toggle="modal">
                                            <div class="ejemplar-hover">
                                                <div class="ejemplar-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                </div>
                                            </div>
                                            <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">                            
                                        </a>
                                        <div class="ejemplar-caption">
                                        <small>Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                            <h6>Título del libro en no más de uno o dos reglones</h6>
                                            <a href="#ejemplarModalUltimoComite1" class="ejemplar-link" data-toggle="modal">
                                                <div class="ejemplar-hover">
                                                    <div class="ejemplar-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                </div>
                                            </div>
                                            <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                            </a>
                                        <div class="ejemplar-caption">
                                                <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                            <h6>Título del libro en no más de uno o dos reglones</h6>
                                            <a href="#ejemplarModalUltimoComite1" class="ejemplar-link" data-toggle="modal">
                                                <div class="ejemplar-hover">
                                                    <div class="ejemplar-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                </div>
                                            </div>
                                            <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                            </a>
                                        <div class="ejemplar-caption">
                                                <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                            <h6>Título del libro en no más de uno o dos reglones</h6>
                                            <a href="#ejemplarModalUltimoComite1" class="ejemplar-link" data-toggle="modal">
                                                <div class="ejemplar-hover">
                                                    <div class="ejemplar-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                </div>
                                            </div>
                                            <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                            </a>
                                        <div class="ejemplar-caption">
                                                <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        </div>
                                    </div>

                                   

                            
                            <div class="col-lg-12 text-center">
                                <a href="./views/recomendaciones/recomendaciones_set.php" class="btn btn-lg btn-default">Ver más</a>
                            </div>
                    </section>
                </article>
                 <!-- =============================================== -->
                 <!-- FIN - Recomendaciones de Ultimo Comite -->
                 <!-- =============================================== -->



                 <!-- =============================================== -->
                 <!-- Libros Recomendados -->
                 <!-- =============================================== -->
                <article class="animated fadeIn">
                            <section id="ejemplar">  
                                <div class="row">
                                    <div class="col-lg-12">
                                        <header class="text-left">
                                            <h3>Libros Recomendados <a href="./views/ejemplares/ejemplares.php" class="link-normal">Ver todo</a></h3>
                                            <p class="hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur explicabo laborum aperiam quod tempora necessitatibus ab nesciunt, velit et facilis at illo a corporis vitae voluptates? Nulla atque suscipit necessitatibus.</p>
                                        </header>
                                    </div>
                                </div>

                                 <div class="row">

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>
                                
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                    </div>
                                                </div>
                                                <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                                                </a>
                                            <div class="ejemplar-caption">
                                                    <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <a href="./views/ejemplares/ejemplares.php" class="btn btn-lg btn-default">Ver más</a>
                                        </div>
                                </div>
                            </section>
                </article>
                 <!-- =============================================== -->
                 <!-- FIN - Libros Recomendados -->
                 <!-- =============================================== -->
            
            

                 <!-- =============================================== -->
                 <!-- OTROS COMITES -->
                 <!-- =============================================== -->
                <article class="animated fadeIn">
                    <section id="comites">
                        <header>
                            <h3 class="text-left">Otros Comité <a href="/PRL/views/otrosComites/otroscomites.php" class="link-normal">ver todo</a></h3>
                        </header>


                            <div class="row"> 
                                <div id="recomendaciones-panel">        
                                 <!--Recomendaciones Panel contenido-->                
                                <div class="col-lg-6 recomendaciones-item">
                                        <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="recomendaciones-hover">
                                                            <div class="recomendaciones-hover-content">
                                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                            </div>
                                                    </div>
                                                    <h4>Título del Comité</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</small>
                                                    <br/>  
                                                    <br/>              
                                                    <!--Contenido Footer del panel-->
                                                    <div class="footer-description">
                                                        <label class="label label-default">Año: 2015</label>
                                                        <i class="fa fa-users fa-2x pull-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <div class="col-lg-6 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="recomendaciones-hover">
                                                        <div class="recomendaciones-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                        </div>
                                                </div>
                                                <h4>Título del Comité </h4>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</small>
                                                <br/>  
                                                <br/>              
                                                <!--Contenido Footer del panel-->
                                                <div class="footer-description">
                                                    <label class="label label-default">Año: 2015</label>
                                                    <i class="fa fa-users fa-2x pull-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div id="recomendaciones-panel">        
                                <!--Recomendaciones Panel contenido-->                
                                <div class="col-lg-6 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="recomendaciones-hover">
                                                        <div class="recomendaciones-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                        </div>
                                                </div>
                                                <h4>Título del Comité </h4>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</small>
                                                <br/>  
                                                <br/>              
                                                <!--Contenido Footer del panel-->
                                                <div class="footer-description">
                                                    <label class="label label-default">Año: 2015</label>
                                                    <i class="fa fa-users fa-2x pull-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-6 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="recomendaciones-hover">
                                                        <div class="recomendaciones-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                        </div>
                                                </div>
                                                <h4>Título del Comité </h4>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</small>
                                                <br/>  
                                                <br/>              
                                                <!--Contenido Footer del panel-->
                                                <div class="footer-description">
                                                    <label class="label label-default">Año: 2015</label>
                                                    <i class="fa fa-users fa-2x pull-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-12 text-center">
                                <a href="/PRL/views/otrosComites/otroscomites.php"><button type="button" class="btn btn-lg btn-default">Ver más</button></a> 
                            </div>
                        
                    </section>
                </article>
                 <!-- =============================================== -->
                 <!-- FIN -OTROS COMITES -->
                 <!-- =============================================== -->
             

                </main>
             </div>       
        </div>

        <!--************  Footer   ***********-->
        <?php
            include("shared/footer.php")
        ?>
        <!--*********************************-->
    
    </div>


        <!--  Modal Libro -->
        <div class="modal fade" id="ejemplarModalUltimoComite1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Título del libro en no más de uno o dos reglones, si no cabe se…</h4>
                    </div>
                    <div class="modal-body row">
                        <div class="col-lg-4 text-center">
                            <img class="img-responsive img-centered" src="resources/img/book-portada.jpg" alt="" width="200px">
                            <p class="item-intro text-muted">Nombre_del_autor uno_a__dos_reglones_m-aximo.</p>
                        </div>
                            
                        <div class="col-lg-8">
                            <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                            <ul class="list-inline">
                                <li><strong>Publicado:</strong> Julio 2018</li><br/>
                                <li><strong>ISBN:</strong> 1-4028-9462-7</li><br/>
                                <li><strong>Materias: </strong> Astronomía</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <a href="./views/recomendaciones/recomedaciones_detalle_ejem.php" class="btn btn-default">                    
                            <i class="fa fa-plus"></i> Más información
                        </a> 
                    </div>
            </div>
            </div>
        </div>


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
                            <img class="img-responsive img-centered" src="resources/img/book-portada.jpg" alt="" width="200px">
                            <p class="item-intro text-muted">Nombre_del_autor uno_a__dos_reglones_m-aximo.</p>
                        </div>
                            
                        <div class="col-lg-8">
                            <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                            <ul class="list-inline">
                                <li><strong>Publicado:</strong> Julio 2018</li><br/>
                                <li><strong>ISBN:</strong> 1-4028-9462-7</li><br/>
                                <li><strong>Materias: </strong> Astronomía</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <a href="./views/ejemplares/ejemplar_description.php" class="btn btn-default">                    
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
                            <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>     
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





        <script src="resources/jquery/jquery.min.js"></script>
        <script src="resources/bootstrap/js/bootstrap.min.js"></script>        

        <!--Header galery-->
        <script type="text/javascript" src="resources/js/channels-524_js_jqueryui_1_10_3.js"></script>

        <!-- Footer map container -->
        <script type="text/javascript" src="resources/js/boxes-7976_js_file.js"></script>

        <!-- slider para imagenes en header-->
        <script type="text/javascript" src="resources/js/header-carrousel.js"></script>
        <script type="text/javascript" src="resources/js/jquery.carouFredSel-5.6.2.js"></script>
        
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyClV8QvrJtON__TUj5W7Q8mWCM6BKglZ4M"></script>
    
        <script type="text/javascript">
                $(document).ready(function () 
                {
                    ntg_Google_map_init();
                });
        </script>
</body>

</html>
