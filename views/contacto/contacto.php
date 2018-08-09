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
        
        <?php
            include("./../../shared/header.php");
            include("./../../shared/nav.php");
        ?>


        <div id="container">
            <div id="contacto" class="col-lg-9 col-md-9 animated fadeIn">
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
