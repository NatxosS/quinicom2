<?php
$alerta = false;

session_start();
$id_finaliza = $_SESSION["id-usuario"];
$fecha = date('Y-m-j');

 if(isset($_POST["rdo_echada"])){
 		 $id_echada = $_POST["rdo_echada"];
 		 $alerta = true;
    }else{
    	$alerta = false;
    	$id_echada = 0;
 }

if(isset($_POST["recaudado_txt"])){
 		 $importe = $_POST["recaudado_txt"];
 		 $alerta = true;
    }else{
    	$alerta = false;
    	$importe = 0;
    }
$importe = round($importe, 2);

/*
echo "fecha: ".$fecha."<br/>";
echo "Finaliza: ".$id_finaliza."<br/>";
echo "Rellenada: ".$id_echada."<br/>";
echo "Importe: ".$importe."<br/>";
*/

 $test = false;

 include("conexion.php");

 	$consulta = "insert into jornadas (id_finaliza,id_echada,fecha_finaliza, importe) values($id_finaliza,$id_echada,'$fecha',$importe);";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

	$consulta = "UPDATE partidousuario SET resultado= '';";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if(ejecutar_consulta)
	{
		$test = true;
	}
	else
	{
		$test = false;
	}

	$consulta = "UPDATE partidos SET partido= '', resultado = '';";
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
		$mensaje = "Se finalizo la ultima jornada :)";
	}
	else
	{
		$mensaje = "No se pudo actualizar :/";
	}

	$conexion->close();
	header("Location: ../protegido.php?op=fin&mensaje=$mensaje");
?>