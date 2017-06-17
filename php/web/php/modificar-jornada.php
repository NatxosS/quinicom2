<?php

// recogemos las variables del formulario y al final actualizamos los datos
 $partido1 = $_POST["partido_1"];
 	if(isset($_POST["rdo_1"])){
 		 $resultado1 = $_POST["rdo_1"];
    }else{
    	 $resultado1 = "";
    }


 $partido2 = $_POST["partido_2"];
 	if(isset($_POST["rdo_2"])){
 		 $resultado2 = $_POST["rdo_2"];
    }else{
    	 $resultado2 = "";
    }

 $partido3 = $_POST["partido_3"];
 	if(isset($_POST["rdo_3"])){
 		 $resultado3 = $_POST["rdo_3"];
    }else{
    	 $resultado3 = "";
    }

 $partido4 = $_POST["partido_4"];
 	if(isset($_POST["rdo_4"])){
 		 $resultado4 = $_POST["rdo_4"];
    }else{
    	 $resultado4 = "";
    }

 $partido5 = $_POST["partido_5"];
 	if(isset($_POST["rdo_5"])){
 		 $resultado5 = $_POST["rdo_5"];
    }else{
    	 $resultado5 = "";
    }

 $partido6 = $_POST["partido_6"];
 	if(isset($_POST["rdo_6"])){
 		 $resultado6 = $_POST["rdo_6"];
    }else{
    	 $resultado6 = "";
    }

 $partido7 = $_POST["partido_7"];
 	if(isset($_POST["rdo_7"])){
 		 $resultado7 = $_POST["rdo_7"];
    }else{
    	 $resultado7 = "";
    }

 $partido8 = $_POST["partido_8"];
 	if(isset($_POST["rdo_8"])){
 		 $resultado8 = $_POST["rdo_8"];
    }else{
    	 $resultado8 = "";
    }

 $partido9 = $_POST["partido_9"];
 	if(isset($_POST["rdo_9"])){
 		 $resultado9 = $_POST["rdo_9"];
    }else{
    	 $resultado9 = "";
    }

 $partido10 = $_POST["partido_10"];
 	if(isset($_POST["rdo_10"])){
 		 $resultado10 = $_POST["rdo_10"];
    }else{
    	 $resultado10 = "";
    }

 $partido11 = $_POST["partido_11"];
 	if(isset($_POST["rdo_11"])){
 		 $resultado11 = $_POST["rdo_11"];
    }else{
    	 $resultado11 = "";
    }

 $partido12 = $_POST["partido_12"];
 	if(isset($_POST["rdo_12"])){
 		 $resultado12 = $_POST["rdo_12"];
    }else{
    	 $resultado12 = "";
    }

 $partido13 = $_POST["partido_13"];
 	if(isset($_POST["rdo_13"])){
 		 $resultado13 = $_POST["rdo_13"];
    }else{
    	 $resultado13 = "";
    }

 $partido14 = $_POST["partido_14"];
 	if(isset($_POST["rdo_14"])){
 		 $resultado14 = $_POST["rdo_14"];
    }else{
    	 $resultado14 = "";
    }

 $test = false;

 include("conexion.php");

	$consulta = "UPDATE partidos SET partido = '$partido1', resultado = '$resultado1' WHERE id_partidos = 1;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

	$consulta = "UPDATE partidos SET partido = '$partido2', resultado = '$resultado2' WHERE id_partidos = 2;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido3', resultado = '$resultado3' WHERE id_partidos = 3;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido4', resultado = '$resultado4' WHERE id_partidos = 4;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido5', resultado = '$resultado5' WHERE id_partidos = 5;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido6', resultado = '$resultado6' WHERE id_partidos = 6;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido7', resultado = '$resultado7' WHERE id_partidos = 7;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido8', resultado = '$resultado8' WHERE id_partidos = 8;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido9', resultado = '$resultado9' WHERE id_partidos = 9;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido10', resultado = '$resultado10' WHERE id_partidos = 10;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido11', resultado = '$resultado11' WHERE id_partidos = 11;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido12', resultado = '$resultado12' WHERE id_partidos = 12;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido13', resultado = '$resultado13' WHERE id_partidos = 13;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

		$consulta = "UPDATE partidos SET partido = '$partido14', resultado = '$resultado14' WHERE id_partidos = 14;";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

	
	if($test)
	{
		$mensaje = urlencode("<div class='alert alert-success alert-dismissable fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Se actualizo la quiniela :)  </strong><p><a href='protegido.php' class ='alert-link'><i class='fa fa-home' aria-hidden='true'></i> Inicio</a></p></div>
");
	}
	else
	{
		$mensaje = urlencode("<div class='alert alert-danger alert-dismissable fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>No se pudo actualizar :/ </strong></div>");
	}

	$conexion->close();
	header("Location: ../protegido.php?op=jornada&mensaje=$mensaje");

?>