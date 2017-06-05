<?PHP
include('php/Mobile_Detect.php'); 
     $detect = new Mobile_Detect(); //redireccionar a versión móvil si nos visitan desde un móvil o tablet 
    if ($detect->isMobile() || $detect->isTablet()) { 
     	$css = "css/iniciom.css";
    } else {
    	$css = "css/inicio.css";
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf=8" />
	<title>Acceso quiniela</title>
	<link rel="stylesheet" href=<?PHP echo $css ?> />
</head>
<body>
	<section id="contenido">
		<div id="formulario">
			<form id="inicio-sesion" name="sesion_frm" action="php/acceder.php" method="post" enctype="multipart/form-data">
				<fieldset class="quitarborde">
					<legend>Iniciar sesi&oacute;n</legend>
						<label for="email">Email:</label>
						<input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Introduce tu email" maxlength="100" required />
						<label for="pass">Contrase&ntilde;a:</label>
						<input type="password" id="pass" class="cambio" name="pass_txt" placeholder="Contrase&ntilde;a" title="Introduce tu contrase&ntilde;a" maxlength="100" required />
						<input type="submit" id="iniciar-sesion" class="cambio" name="iniciar_btn" value="Iniciar sesi&oacute;n" />

							<?php
								session_start();
									if (isset($_SESSION["error"])) {
										if ($_SESSION["error"] > 0 ){
											if ($_SESSION["error"] < 3 ){
												echo "<br/><span>Inicio sesion fallida: Intentos ".$_SESSION["error"]." de 3 </span><br/>";
											}
											else
											{
												header ("Location: https://www.google.es");
											}
										}
									}
							?>
				</fieldset>
			</form>	
		</div>
	</section>
</body>
</html>