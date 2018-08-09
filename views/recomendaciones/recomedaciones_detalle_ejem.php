<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <!-- Modo compatibilidad -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portal de Recomendaciones de Lectura">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Detalle Ejemplar - Recomendaciones de Lectura</title>

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
            include("./../../shared/nav.php")
        ?>


        <div id="container">

                    <!-- =============================================== -->
                    <!-- MIGAS DE PAN -->
                    <!-- =============================================== -->
                    <div class="col-lg-9">
                        <nav>            
                            <div class="navegacion">
                                <p class="navegacion"><a class="channellink" href="./../../index.php">Inicio</a> / 
                                <a href="./../recomendaciones/recomendaciones.php">Recomendaciones</a> /
                                <a href="#">Detalle Ejemplar</a>
                                </p>
                            </div>
                        </nav>
                    </div>
                     <!-- =============================================== -->
                    <!-- FIN - MIGAS DE PAN -->
                    <!-- =============================================== -->



            <div class="col-lg-9 col-md-9">

                        <div class="row animated fadeIn">
                            <!-- =============================================== -->
                            <!--  PANEL 1 DETALLE EJEMPLAR  -->
                            <!-- =============================================== -->
                            <div class="col-lg-9">
                                    <!-- =============================================== -->
                                    <!-- TITULO - EDITORIAL - IMAGEN -->
                                    <!-- =============================================== -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>TÍTULO DEL LIBRO EN UNO O DOS REGLONES. TÍTULO DEL LIBRO EN UNO O DOS REGLONES.</h4>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-responsive img-centered" src="../../resources/img/book-portada.jpg" alt="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Autor</label>
                                        <p class="ejem-nombreAutor">Nombre_del_autor_de_un_reglon.</p>
                                        <label>Editorial</label>
                                        <p>Nombre_del_editorial</p> 
                                        <small><a href="#">Ver en Catálogo de Bibliotecas Públicas <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></small>
                                        <br>
                                        <small><a href="#">BPdigital <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></small>
                                        <br>
                                        <small><a href="#">Ver en MercadoPublico <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></small>
                                    </div>
                                    <!-- =============================================== -->
                                    <!-- FIN - TITULO - EDITORIAL - IMAGEN -->
                                    <!-- =============================================== -->



                                    <!-- =============================================== -->
                                    <!-- NAV BAR  -->
                                    <!-- =============================================== -->
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px;">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#ejem_recomedacion" data-toggle="tab">Información General</a></li>
                                            <li><a href="#ejem_descripcion" data-toggle="tab">Detalle</a></li>
                                            <li><a href="#ejem_enlaces" data-toggle="tab">Otros Enlaces</a></li>
                                        </ul>
                                        <div class="tab-content box-description">
                                            <div class="tab-pane active text-justify" id="ejem_recomedacion">
                                                <label>Area Publicación</label>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, unde!.</p>                               
                                                <label>Reseña</label>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius elit at condimentum ﬁnibus. Fusce lacinia mi libero, eget sagittis risus consectetur a. Vivamus suscipit turpis a laoreet posuere. Fusce tristique vitae sapien non maximus. Vestibulum</p>
                                                <label>Argumento</label>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius elit at condimentum ﬁnibus. Fusce lacinia mi libero, eget sagittis risus consectetur a. Vivamus suscipit turpis a laoreet posuere. Fusce tristique vitae sapien non maximus. Vestibulum at lorem pellentesque, aliquam neque sit amet, volutpat risus. Vestibulum quis eleifend massa. Vestibulum accumsan consectetur lacus cursus iaculis. Pellentesque eget ipsum in odio mollis scelerisque vitae nec nisl. Sed felis odio, gravida ac sem non, blandit consectetur urna. Maecenas et molestie arcu.</p>
                                                <br>
                                            </div>

                                            <div class="tab-pane" id="ejem_descripcion">
                                                <label>Nº de páginas: </label>
                                                <p>345</p>
                                                <label>Dimensiones: </label>
                                                <p>200x200</p>
                                                <label>Formato: </label>
                                                <p>No Aplica</p>
                                            </div>

                                            <div class="tab-pane" id="ejem_enlaces">
                                                <small><a href="#">Ver en Catálogo de Bibliotecas Públicas <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></small>
                                                <br>
                                                <small><a href="#">BPdigital <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></small>
                                                <br>
                                                <small><a href="#">Ver en MercadoPublico <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></small>                             
                                            </div>
                                        </div>
                                    </div>
                                    <!-- =============================================== -->
                                    <!-- FIN - NAV BAR  -->
                                    <!-- =============================================== -->


                                    <!-- =============================================== -->
                                    <!-- PANEL COMITE  -->
                                    <!-- =============================================== -->
                                    <div class="box-otros-comites">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <a href="../recomendaciones/recomendaciones_set.php">
                                                    <div class="panel panel-comite text-center">
                                                        <div class="panel-body comite-box">Nombre del Comité -2016</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="../recomendaciones/recomendaciones_set.php">
                                                    <div class="panel panel-comite text-center">
                                                        <div class="panel-body comite-box">Nombre del Comité -2016</div>
                                                    </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- =============================================== -->
                                    <!-- FIN - PANEL COMITE  -->
                                    <!-- =============================================== -->
                                
                            </div>
                            <!-- =============================================== -->
                            <!-- FIN - PANEL DETALLE EJEMPLAR  -->
                            <!-- =============================================== -->
                    

                 
                            <!-- =============================================== -->
                            <!-- PANEL - 2 DETALLE EJEMPLAR  -->
                            <!-- =============================================== -->                 
                            <div class="col-lg-3 col-md-12 col-sm-12 ejemplar-box-right">
                                <label for="" class="heading">Año de Publicación:</label>
                                <br>
                                <label class="label label-danger">2018</label>
                                <br>
                                <br>
                                <label for="" class="heading">Año de recomendación:</label>
                                <br>
                                <label class="label label-danger">2018</label>
                                <label class="label label-danger">2018</label>
                                <br>
                                <br>
                                <label for="" class="heading">Area:</label>
                                <br>
                                <label class="label label-danger">Ciencia y Tecnología</label>
                                <br>
                                <br>
                                <label for="" class="heading">Materia:</label>
                                <br>
                                <label class="label label-danger">Astronomía</label>
                                <br>
                                <br>
                                <!--Rango Etario-->
                                <label for="" class="heading">Rango Etario:</label>
                                <br>
                                <label class="label label-danger">Jovenes</label>
                                <label class="label label-danger">Adultos</label>
                                <br>
                                <br>
                                <!--ISBN-->
                                <label for="" class="heading">ISBN:</label>
                                <br>
                                <label class="label label-danger">1-4028-9462-7</label>
                                <br>
                                <br>
                                <label for="" class="heading">Nº Sistema:</label>
                                <br>
                                <label class="label label-danger">4028</label>
                                <br>
                                <br>
                                <label for="" class="heading">ID Convenio Marco:</label>
                                <br>
                                <label class="label label-danger">94629462</label>
                                <br>
                                <br>
                                <br>
                                <a href="" class="label label-success ejemplar-btn-export">Exportar XLS</a>
                                <br>
                                <br>
                             </div>  
                            <!-- =============================================== -->
                            <!--  FIN PANEL 2 DETALLE EJEMPLAR  -->
                            <!-- =============================================== -->
                    </div>


                    <!-- =============================================== -->
                    <!-- OTROS LIBRO RECOMENDADOS  -->
                    <!-- =============================================== -->       
                    <main>
                        <article>

                            <section>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>OTROS LIBROS RECOMENDADOS</h3>
                                    </div>
                                </div>
                            </section>

                            <section id="ejemplar" class="main-container animated fadeIn">  

                                    <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                                    <div class="ejemplar-hover">
                                                        <div class="ejemplar-hover-content">
                                                            <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                        </div>
                                                    </div>
                                                    <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">                            
                                                </a>
                                                <div class="ejemplar-caption">
                                                    <small>Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
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
                                                    <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">                            
                                                </a>
                                                <div class="ejemplar-caption">
                                                    <small>Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
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
                                                    <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">                            
                                                </a>
                                                <div class="ejemplar-caption">
                                                    <small>Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
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
                                                    <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">                            
                                                </a>
                                                <div class="ejemplar-caption">
                                                    <small>Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                                </div>
                                        </div>
                                    </div>
                            </section>
                        </article>
                    </main>
                     <!-- =============================================== -->
                    <!-- OTROS LIBRO RECOMENDADOS  -->
                    <!-- =============================================== --> 

                </div>
        </div>

        <!--************  Footer   ***********-->
        <?php
            include("./../../shared/footer.php")
        ?>
        <!--*********************************-->

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
                        <img class="img-responsive img-centered" src="../../resources/img/book-portada.jpg" alt="" width="200px">
                        <p class="item-intro text-muted">Nombre_del_autor uno_a__dos_reglones_m-aximo.</p>
                    </div>
                           
                    <div class="col-lg-8 text-justify">
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
                          <a href="../../views/ejemplares/ejemplar_description.php" class="btn btn-default">                    
                          <i class="fa fa-plus"></i> Más información
                      </a> 
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
        <script  type="text/javascript">
            $('.selectpicker').selectpicker({
                    lenguaje:'es'
                });
        </script> 
</body>

</html>
