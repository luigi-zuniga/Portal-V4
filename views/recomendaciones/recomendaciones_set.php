<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Títulos Recomendaciones - Recomendaciones de Lectura</title>
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
        ?>
        
        <?php
            include("./../../shared/nav.php");
        ?>


        <div id="container">
            <div class="col-lg-12">
            <div id="formulario_feed" class="col-lg-3 box-busqueda pull-left">
                     <form  action="ejem_lista_busqueda.php">
                        <label class="control-label">Busca:</label>


                        <input class="form-control lead" name="" placeholder="¿Buscas algo en particular?" type="text">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                            </div>
                        <br/>

                        <!--Mensaje-->
                        <label><strong>Filtrar:</strong></label>

                        <!--Filtro por año-->
                        <label class="control-label">Año de Publicacion:</label>
                        <select id="filtroYear">
                            <option value="">Seleccione una Opción</option>
                        </select>
                        <br/>

                        <!--filtro por Area-->
                        <label class="control-label">Area:</label>
                        <select id="filtroRegion">
                            <option value="">Seleccione una Opción</option>
                        </select>

               

                        <!--Filtro por materia-->
                        <label class="control-label">Materias:</label>
                        <select class="js-source-states">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        </select>

                  

                        <!--Rango Etario-->
                        <label class="control-label">Rango Etario:</label>
                        <select tabindex="-1" aria-hidden="true">
                            <option value="">Público General</option>
                            <option value="">Infantil</option>
                            <option value="">Juvenil</option>
                            <option value="">Adulto</option>
                            <option value="">Adulto Mayor</option>
                        </select>

                       
                       <div class="lead"></div>

                        <!-- Boton Aplicar-->
                       
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-sm">Aplicar</button>
                        </div>
                        <div class="lead"></div>
                        <div class="text-center">
                            <a href="#" class="btn btn-success">Exportar XLS</a>     
                        </div>

                    
                        <br>
                    </form>
            </div>
            <div class="col-lg-9 col-md-9">

            <nav>            
                <ol class="breadcrumb navegacion">
                    <li><a href="./../../index.php">Inicio</a></li>
                    <li><a href="./../recomendaciones/recomendaciones.php">Recomendaciones</a></li>
                    <li class="active"><a href="#">Títulos</a></li>
                </ol>
            </nav>



            <main>
                <article>
                    <section>
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>TITULO_SET_DE_RECOMENDACIONES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quos, cupiditate nisi maxime quasi repellat odio fuga blanditiis iure quas delectus voluptate aut qui libero labore vitae rerum, minus veritatis, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quos, cupiditate nisi maxime quasi repellat odio fuga blanditiis iure quas delectus voluptate aut qui libero labore vitae rerum, minus veritatis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quos, cupiditate nisi maxime quasi repellat odio fuga blanditiis iure quas delectus voluptate aut qui libero labore vitae rerum, minus veritatis.</p>
                            </div>
                            <div class="setDescription col-lg-4 text-left">
                                <label for="">Recomendado por:</label>
                                <p>comité</p>
                                <label for="">Año:</label>
                                <p>2018</p>
                                <br/>
                                <a href="#"><h5 class="label label-default">Ver más recomendaciones</h5    ></a>
                            </div>
                        </div>
                    </section>

                     <section id="ejemplar" class="main-container">  

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
                                            <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">
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
                                            <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">
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
                                            <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">
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
                                            <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">
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
                                            <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">
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
                                            <img src="/PRL/resources/img/book-portada.jpg" class="img-responsive" alt="">
                                        </a>
                                        <div class="ejemplar-caption">
                                            <small> Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <a href="/PRL/views/recomendaciones/recomendaciones.php" class="btn btn-lg btn-default">Ver más</a>
                            </div>
             </section>

                </article>
            </main>
            </div>

            </div>


        <!--contenedor de 9 columnas-->
        </div>


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
                    <h4 class="modal-title text-center">Nombre_Integrante_Comité</h4>
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
    </body>

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
