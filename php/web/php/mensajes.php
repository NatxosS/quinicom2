<?php
	if(isset($_GET["mensaje"]))
	{
		$mensaje = $_GET["mensaje"];
		echo urldecode($mensaje);
	}
