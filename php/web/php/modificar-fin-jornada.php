<?php

$alerta = false;

session_start();
$id_finaliza = $_SESSION["id-usuario"];
$fecha = date('Y-m-j');

if (isset($_POST["rdo_echada"])) {
    $id_echada = $_POST["rdo_echada"];
    $alerta = true;
} else {
    $alerta = false;
    $id_echada = 0;
}

if (isset($_POST["recaudado_txt"])) {
    $importe = $_POST["recaudado_txt"];
    $alerta = true;
} else {
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
if ($hecho) {
    $consulta = "insert into jornadas (id_finaliza,id_echada,fecha_finaliza, importe) values($id_finaliza,$id_echada,'$fecha',$importe);";
    $ejecutar_consulta = $conexion->query(utf8_encode($consulta));
    if (ejecutar_consulta) {
        $test = true;
    } else {
        $test = false;
    }

    $consulta = "UPDATE partidousuario SET resultado= '';";
    $ejecutar_consulta = $conexion->query(utf8_encode($consulta));
    if (ejecutar_consulta) {
        $test = true;
    } else {
        $test = false;
    }

    $consulta = "UPDATE partidos SET partido= '', resultado = '';";
    $ejecutar_consulta = $conexion->query(utf8_encode($consulta));
    if (ejecutar_consulta) {
        $test = true;
    } else {
        $test = false;
    }


    if ($test) {
        $mensaje = urlencode("<div class='alert alert-success alert-dismissable fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Se finalizo la jornada :)  </strong><p><a href='protegido.php' class ='alert-link'><i class='fa fa-home' aria-hidden='true'></i> Inicio</a></p></div>
");
    } else {
        $mensaje = urlencode("<div class='alert alert-danger alert-dismissable fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>No se pudo actualizar :/ </strong></div>");
    }
} else {
    header("Location: ../protegido.php");
}

$conexion->close();
