<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha Libro - Recomendaciones de Lectura</title>
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
            include("./../../shared/nav.php")
        ?>


        <div id="container">
            <div class="col-lg-9">
                <nav>            
                    <ol class="breadcrumb navegacion">
                        <li><a href="./../../index.php">Inicio</a></li>
                        <li class="active">Ficha(Libro)</li>
                    </ol>
                </nav>
            </div>

            <div class="col-lg-9 col-md-9" style="margin-bottom:60px;">

                <div class="row">

                    <div class="col-lg-9">

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


                        <!--contenedor NAV-TAB-->

                            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px;">
                                <!--nav-tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#ejem_recomedacion" data-toggle="tab">Información General</a></li>
                                    <li><a href="#ejem_descripcion" data-toggle="tab">Detalle</a></li>
                                    <li><a href="#ejem_enlaces" data-toggle="tab">Otros Enlaces</a></li>
                                </ul>
                                <!--Fin nav-tabs-->

                                <!-- tab-content -->
                                <div class="tab-content">
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
                                <!--Fin tab-content -->
                            
                            
                            </div>
                        <!--Fin contenedor NAV-TAB-->
                        <div class="box-otros-comites">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="panel panel-comite text-center">
                                    <div class="panel-body comite-box">Nombre del Comité -2016</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="panel panel-comite text-center">
                                    <div class="panel-body comite-box">Nombre del Comité -2016</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                 <!--Descripcion nav-->
                 
                 
                    <div class="col-lg-3 col-md-12 col-sm-12 ejemplar-box-right">
                                <label for="" class="heading">Año de Publicación:</label>
                                <br>
                                <label class="label label-danger">2018</label>
                                <br>
                                <br>
                                <label for="" class="heading">Año de recomendación:</label>
                                <br>
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
                                <label for="" class="heading">Rango Etario:</label>
                                <br>
                                <label class="label label-danger">Jovenes</label>
                                <br>
                                <br>
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
                        <!--Fin Descripcion nav-->


                    </div>

                    <main>
                        <article>
                            <section>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>OTROS LIBROS RECOMENDADOS</h3>
                                    </div>
                                </div>
                            </section>

                            <section id="ejemplar" class="main-container">  

                                    <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                                                <h6>Título del libro en no más de uno o dos reglones</h6>
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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
                                                <a href="/PRL/views/ejemplares/ejemplar_description.php" class="ejemplar-link">
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

                </div>
            <!--contenedor de 9 columnas-->
        </div>

        <!--************  Footer   ***********-->
        <?php
            include("./../../shared/footer.php")
        ?>
        <!--*********************************-->

    </div>
</body>

    <script  src="/PRL/bower_components/jquery/dist/jquery.min.js"></script>
    <script  src="/PRL/bower_components/components-bootstrap/js/bootstrap.min.js"></script>
    <script  src="/PRL/resources/js/channels-524_js_main.js"></script>
    <script  src="/PRL/resources/js/channels-524_js_jquery_1_9_1.js"></script>
    <script  src="/PRL/resources/js/channels-524_js_jqueryui_1_10_3.js"></script>
    <script  src="/PRL/resources/js/channels-524_js_jquerymigration_1_2_1.js"></script>
    <script  src="/PRL/resources/js/boxes-7976_js_file.js"></script>
    <script  src="http://maps.google.com/maps/api/js?key=AIzaSyClV8QvrJtON__TUj5W7Q8mWCM6BKglZ4M"></script>

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
    <script  src="/PRL/resources/js/header-carrousel.js"></script>
    <script  src="/PRL/resources/js/jquery.carouFredSel-5.6.2.js"></script>
</body>

</html>
