<?php

session_start();
  //Evaluo que la sesion continua verificando una de las variables creada sigue en true
  if (!$_SESSION["autentificado"]) {
  		header("Location: php/salir.php");
  }

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
		$titulo = "Ubicaci&oacute;n";
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
	<link rel="stylesheet" href="css/movil.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write("<script src='js/jQuery.min.js'><\/script>");
	</script>
	<script src="js/menu.js"></script>
	<script src="js/colorea.js"></script>
	<script src="js/limite.js"></script>
	<script src="js/desactivar.js"></script>
	<script src="js/noticias.js"></script>

</head>
<header>
	<h4> Bienvenido 
	<?php 
		echo "<script> scriptAskForWebNotificationPermissions() </script>";
		echo $_SESSION["usuario"]."<br/>" ;
		echo "</h4>"
	?>

		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>
		<nav>
			<ul>
				<li><a href="protegido.php"><span class="icon-house"></span>INICIO</a></li>
				<li><a href="?op=rellenar"><span class="icon-suitcase"></span>RELLENAR</a></li>
				<li><a href="?op=jornada"><span class="icon-earth"></span>JORNADA</a></li>
				<li><a href="?op=fin"><span class="icon-mail"></span>FIN JORNADA</a></li>
			</ul>
		</nav>
	</header>
	<body>
		<section id="principal">
			<?php include($contenido); ?>
		</section>
	</section>
	<div id="salir">
		<a class="salida" href="php/salir.php"><img src="img/salir.png" width="30px"/> </a>
	</div>
	</body>