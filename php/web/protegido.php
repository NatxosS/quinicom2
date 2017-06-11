<?php
session_start();
//Evaluo que la sesion continua verificando una de las variables creada sigue en true
if (!$_SESSION["autentificado"]) {
    header("Location: php/salir.php");
}
error_log("Entro en protegido");
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch ($op) {
    case 'jornada':
        $contenido = "php/jornada.php";
        $titulo = "La Jornada";
        break;
    case 'rellenar':
        $contenido = "php/rellenar.php";
        $titulo = "Rellenar";
        break;
    case 'fin':
        $contenido = "php/fin.php";
        $titulo = "Fin Jornada";
        break;
    case 'ubicacion':
        $contenido = "php/ubicacion-despacho.php";
        $titulo = "Ubicación";
        break;
    default:
        $titulo = "Resultados";
        $contenido = "php/inicio.php";
        break;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../node_modules/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/movil.css">
    </head>
    <body>
        <script>
            !window.jQuery && document.write("<script src='js/jQuery.min.js'><\/script>");
        </script>
        <script src="js/menu.js"></script>
        <script src="js/colorea.js"></script>
        <script src="js/limite.js"></script>
        <script src="js/desactivar.js"></script>
        <script src="js/noticias.js"></script>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="protegido.php">Quinicom</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="?op=rellenar">Rellenar</a></li>
                            <li><a href="?op=jornada">Jornada</a></li>
                            <li><a href="?op=fin">Fin jornada</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="php/salir.php">Salir <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <h4> Bienvenido 
                <?php
                echo "<script> scriptAskForWebNotificationPermissions() </script>";
                echo $_SESSION["usuario"] . "<br/>";
                echo "</h4>"
                ?>

                <section id="principal">
                    <?php include($contenido); ?>
                </section>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                <script>
            $('#myCollapsible').collapse();
                </script>
        </div>
    </body>
</html>