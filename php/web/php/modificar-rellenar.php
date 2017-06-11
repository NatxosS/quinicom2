<?php
 	if(isset($_POST["rdo_1"])){
 		 $resultado[0] = $_POST["rdo_1"];
    }else{
    	 $resultado[0] = "";
    }

 	if(isset($_POST["rdo_2"])){
 		 $resultado[1] = $_POST["rdo_2"];
    }else{
    	 $resultado[1] = "";
    }

 	if(isset($_POST["rdo_3"])){
 		 $resultado[2] = $_POST["rdo_3"];
    }else{
    	 $resultado[2] = "";
    }

 	if(isset($_POST["rdo_4"])){
 		 $resultado[3] = $_POST["rdo_4"];
    }else{
    	 $resultado[3] = "";
    }

 	if(isset($_POST["rdo_5"])){
 		 $resultado[4] = $_POST["rdo_5"];
    }else{
    	 $resultado[4] = "";
    }

 	if(isset($_POST["rdo_6"])){
 		 $resultado[5] = $_POST["rdo_6"];
    }else{
    	 $resultado[5] = "";
    }

 	if(isset($_POST["rdo_7"])){
 		 $resultado[6] = $_POST["rdo_7"];
    }else{
    	 $resultado[6] = "";
    }

 	if(isset($_POST["rdo_8"])){
 		 $resultado[7] = $_POST["rdo_8"];
    }else{
    	 $resultado[7] = "";
    }

 	if(isset($_POST["rdo_9"])){
 		 $resultado[8] = $_POST["rdo_9"];
    }else{
    	 $resultado[8] = "";
    }

 	if(isset($_POST["rdo_10"])){
 		 $resultado[9] = $_POST["rdo_10"];
    }else{
    	 $resultado[9] = "";
    }

 	if(isset($_POST["rdo_11"])){
 		 $resultado[10] = $_POST["rdo_11"];
    }else{
    	 $resultado[10] = "";
    }

 	if(isset($_POST["rdo_12"])){
 		 $resultado[11] = $_POST["rdo_12"];
    }else{
    	 $resultado[11] = "";
    }

 	if(isset($_POST["rdo_13"])){
 		 $resultado[12] = $_POST["rdo_13"];
    }else{
    	 $resultado[12] = "";
    }

 	if(isset($_POST["rdo_14"])){
 		 $resultado[13] = $_POST["rdo_14"];
    }else{
    	 $resultado[13] = "";
    }
  session_start();
 $usuario = $_SESSION["id-usuario"];

 $test = false;

 include("conexion.php");

 	for ($i = 1; $i < 15; $i++){
 		$j = $i -1;
 		echo $i;
 		echo $j;
 		$consulta = "UPDATE partidousuario SET resultado= '$resultado[$j]' WHERE id_usuarios = '$usuario' and id_partidos = '$i';";
 		echo $consulta;
 		echo "<br/>";
		$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
		if($ejecutar_consulta)
		{
			$test = true;
		}
		else
		{
			$test = false;
		}
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
	header("Location: ../protegido.php?op=rellenar&mensaje=$mensaje");