<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Contacto - Recomendaciones de Lectura</title>
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
            <div id="contacto" class="col-lg-9 col-md-9">
            <nav>            
                <div class="navegacion">
                    <p class="navegacion"><a class="channellink" href="./../../index.php">Inicio</a> / 
                    <a href="#">Contacto</a>
                    </p>
                </div>
            </nav>

                <main>
                    <article>         
                         <section>
                            <header class="col-lg-12 text-left">
                                <h3>Contacto</h3>
                            </header>
                                <div class="col-lg-8">
                                    <p>Si tienes alguna duda o comentario puedes escribirnos a través del formulario OIRS. Te contactaremos a la brevedad posible. </p>
                                </div>
                                <div class="col-lg-4">
                                    <a href="http://contacto.dibam.cl/ES/AtencionCiudadana/OIRS" target="_blank"><span class="label label-default">Abrir Formulari OIRS</span></a>
                                </div>
                            </section>
                    </article>
                </main>
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
    </div>

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
