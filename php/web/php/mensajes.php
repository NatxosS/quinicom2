<?php
 /* Si existe mensaje lo mostramos como alerta */
	if(isset($_GET["mensaje"]))
	{
		$mensaje = $_GET["mensaje"];
		echo urldecode($mensaje);
	}
