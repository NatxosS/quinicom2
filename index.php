<?PHP
/*include('php/Mobile_Detect.php');
$detect = new Mobile_Detect(); //redireccionar a versión móvil si nos visitan desde un móvil o tablet 
if ($detect->isMobile() || $detect->isTablet()) {
    $css = "css/iniciom.css";
} else {
    $css = "css/inicio.css";
}*/
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Acceso quiniela</title>
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="node_modules/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--link rel="stylesheet" href=<?PHP echo $css ?> /-->
        <link rel="stylesheet" href="css/inicio.css">
    </head>
    <body>
        <section id="contenido" class="container-fluid">
            <div class=" fotmularioLogin row">
                <form class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-2 form-horizontal" id="inicio-sesion" name="sesion_frm" action="php/acceder.php" method="post" enctype="multipart/form-data">
                    <h2>Iniciar sesión</h2>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Email:</label>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10">
                            <input type="email" class="cambio form-control"name="email_txt" id="email" placeholder="Email" title="Introduce tu email" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-lg-2 col-sm-2 col-xs-12 control-label">Contraseña:</label>
                        <div class="col-lg-5 col-md-7 col-sm-7 col-xs-10">
                            <input type="password" id="pass" class="cambio form-control" name="pass_txt" placeholder="Contraseña" title="Introduce tu contraseña" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="cambio btn btn-warning" id="iniciar-sesion" name="iniciar_btn">Iniciar sesión</button>
                        </div>
                    </div>
                    <?php
                        session_start();
                        if (isset($_SESSION["error"]) && $_SESSION["error"] > 0) {
                            echo "<br/><span>Inicio sesion fallida</span><br/>";
                            /* if ($_SESSION["error"] > 0 ){
                              if ($_SESSION["error"] < 10 ){
                              echo "<br/><span>Inicio sesion fallida: Intentos ".$_SESSION["error"]." de 3 </span><br/>";
                              }
                              else
                              {
                              header ("Location: https://www.google.es");
                              }
                              } */
                        }
                        ?>
                </form>
            </div>
        </section>
    </body>
</html>